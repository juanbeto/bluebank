<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use App\Models\Account;
use App\Models\City;
use App\Models\TypeMovement;

use Illuminate\Http\Request;

/**
 * Class MovementController
 * @package App\Http\Controllers
 */
class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = Movement::paginate();

        return view('movement.index', compact('movements'))
            ->with('i', (request()->input('page', 1) - 1) * $movements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $movement = new Movement();
        $account = Account::find($id);
        $movement->city = City::all();
        $movement->type_movement = TypeMovement::all();

        return view('movement.create', compact('movement', 'account'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Movement::$rules);

        $movement = Movement::create($request->all());

        $account = Account::find($movement->Account->id);
        $type = TypeMovement::find($movement->TypeMovement->id);
        eval('$account->balance = '.$account->balance .' '.$type->sign.' '.$movement->amount.';');

        if($account->balance >= 0 )
        {
            $account->save();

            return redirect()->action(
                [AccountController::class, 'show'],  $movement->Account->id 
                    )->with('success', 'Movement created successfully.');
        }else{
            return redirect()->action(
                [AccountController::class, 'show'],  $movement->Account->id 
                    )->with('error', 'Error Movement');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movement = Movement::find($id);

        return view('movement.show', compact('movement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movement = Movement::find($id);

        return view('movement.edit', compact('movement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Movement $movement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movement $movement)
    {
        request()->validate(Movement::$rules);

        $movement->update($request->all());

        return redirect()->route('movements.index')
            ->with('success', 'Movement updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $movement = Movement::find($id)->delete();

        return redirect()->route('movements.index')
            ->with('success', 'Movement deleted successfully');
    }
}
