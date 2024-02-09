<?php

namespace App\Http\Controllers;

use App\Models\TypeAccount;
use Illuminate\Http\Request;

/**
 * Class TypeAccountController
 * @package App\Http\Controllers
 */
class TypeAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeAccounts = TypeAccount::paginate();

        return view('type-account.index', compact('typeAccounts'))
            ->with('i', (request()->input('page', 1) - 1) * $typeAccounts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeAccount = new TypeAccount();
        return view('type-account.create', compact('typeAccount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TypeAccount::$rules);

        $typeAccount = TypeAccount::create($request->all());

        return redirect()->route('type-accounts.index')
            ->with('success', 'TypeAccount created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeAccount = TypeAccount::find($id);

        return view('type-account.show', compact('typeAccount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeAccount = TypeAccount::find($id);

        return view('type-account.edit', compact('typeAccount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TypeAccount $typeAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeAccount $typeAccount)
    {
        request()->validate(TypeAccount::$rules);

        $typeAccount->update($request->all());

        return redirect()->route('type-accounts.index')
            ->with('success', 'TypeAccount updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $typeAccount = TypeAccount::find($id)->delete();

        return redirect()->route('type-accounts.index')
            ->with('success', 'TypeAccount deleted successfully');
    }
}
