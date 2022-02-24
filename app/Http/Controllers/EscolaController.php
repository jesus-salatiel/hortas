<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Http\Requests\StoreEscolaRequest;
use App\Http\Requests\UpdateEscolaRequest;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolas = Escola::all();
        return view('admin.escolas.index', compact('escolas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('admin.escolas.create');
        return view('admin.escolas.form', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEscolaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEscolaRequest $request)
    {
        Escola::create($request->all());
        $request->session()->flash('sucesso', "Escola {$request->nome} Incluida com sucesso!!!");
        return redirect()->route('admin.escolas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function show(Escola $escola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escola = Escola::find($id);
        $action = route('admin.escolas.update', $escola->id);
        return view('admin.escolas.form', compact('escola', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEscolaRequest  $request
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEscolaRequest $request, Escola $escola, $id)
    {
        $escola = Escola::find($id);
        $escola->update($request->all());

        $request->session()->flash('sucesso', "Escola $request->nome alterada com sucesso!!!");
        return redirect()->route('admin.escolas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escola $escola, $id)
    {
        Escola::destroy($id);
        $escola->session()->flash('sucesso', "Escola excuida com sucesso!!!");
        return redirect()->route('admin.escolas.index');
    }
}
