<?php

namespace App\Http\Controllers;

use App\Models\Horta;
use App\Http\Requests\StoreHortaRequest;
use App\Http\Requests\UpdateHortaRequest;
use App\Models\Escola;

class HortaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hortas = Horta::all();
        return view('admin.hortas.index', compact('hortas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hortas     = Horta::all();
        $escolas    = Escola::all();

        $action = route('admin.hortas.store');
        return view('admin.hortas.form', compact('action', 'hortas', 'escolas'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHortaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHortaRequest $request)
    {

        //echo "Salvar";

        DB::beginTransaction();

        $horta = Horta::create($request->all());

        DB::commit();

        $request->session()->flash('sucesso', "Horta incluído com sucesso!!!");
        return redirect()->route('admin.hortas.index');


        Horta::create($request->validated());
        return redirect()->view('admin.hortas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horta  $horta
     * @return \Illuminate\Http\Response
     */
    public function show(Horta $horta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horta  $horta
     * @return \Illuminate\Http\Response
     */
    public function edit(Horta $horta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHortaRequest  $request
     * @param  \App\Models\Horta  $horta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHortaRequest $request, Horta $horta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horta  $horta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horta $horta)
    {
        //
    }
}
