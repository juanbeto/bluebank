<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('reports.home');
    }


    public function listTransaction(Request $request){

        if(!$request->date)
            $request->date = Date('Y-m-d');

        $results = DB::table('clients')
        ->join('accounts', 'clients.id', '=', 'accounts.id_client')
        ->join('movements', 'accounts.id', '=', 'movements.id_account')
        ->select('clients.id', 'clients.first_name','clients.last_name', 'clients.number_document', DB::raw('COUNT(1) as count'))
        ->where(DB::raw('DATE_FORMAT(movements.date, "%Y%m")'), date('Ym',strtotime($request->date )))
        ->groupBy('clients.id','clients.first_name', 'clients.last_name', 'clients.number_document')
        ->orderBy('count', 'desc')
        ->get();

        return view('reports.list_transaccion', compact('results'))->with('i', 0)->with('date', $request->date); 
    }


    public function listWithdraw(){

        $results = DB::table('clients')
            ->join('accounts', 'clients.id', '=', 'accounts.id_client')
            ->join('movements', 'accounts.id', '=', 'movements.id_account')
            ->join('type_movements', 'movements.id_type_movement', '=', 'type_movements.id')
            ->select('accounts.id_client', 'clients.first_name','clients.last_name', 'clients.number_document', DB::raw('SUM(amount) as total_movements'))
            ->where('accounts.id_city', '!=', DB::raw('movements.id_city'))
            ->where('type_movements.name', 'retiro')
            ->groupBy('accounts.id_client','clients.first_name', 'clients.last_name', 'clients.number_document')
            ->havingRaw('SUM(amount) > 50')
            ->get();

        return view('reports.list_withdraw', compact('results'))->with('i', 0); 

    }
}
