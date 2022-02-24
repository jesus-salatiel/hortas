<?php

namespace App\Http\Controllers;

use App\Models\Horta;
use App\Http\Requests\StoreHortaRequest;
use App\Http\Requests\UpdateHortaRequest;

class HortaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.hortas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHortaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHortaRequest $request)
    {
        //
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
