<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\EscolaRequest;
use App\Models\Escola;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = "Listas";
        $escolas = Escola::all();
        return view('admin.escolas.index', compact('subtitulo', 'escolas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escolas = Escola::all();
        $action = route('admin.escolas.store');
        return view('admin.escolas.form', compact('action', 'escolas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscolaRequest $request)
    {
        Escola::create($request->all());
        $request->session()->flash('sucesso', "Escola {$request->nome} incluida com sucesso!!!");
        return redirect()->route('admin.escolas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escola = Escola::find($id);
        $action = route('admin.escolas.update', $escola->id );
        return view('admin.escolas.form', compact('escola', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EscolaRequest $request, $id)
    {
        $escola = Escola::find($id);
        $escola->update($request->all());

        $request->session()->flash('sucesso', "Escola $request->nome alterada com sucesso!!!");
        return redirect()->route('admin.escolas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Escola::destroy($id);
        $request->session()->flash('sucesso', "Escola excluida com sucesso!!!");
        return redirect()->route('admin.escolas.index');
    }
}
