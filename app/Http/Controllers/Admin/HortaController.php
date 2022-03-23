<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Escola;
use App\Models\Finalidade;
use App\Models\Horta;
use App\Models\Proximidade;
use App\Models\Tipo;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HortaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hortas = Horta::with(['horta', 'endereco'])->get();
        return view('admin.hortas.index', compact('hortas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escolas        = Escola::all();
        $tipos          = Tipo::all();
        $finalidades    = Finalidade::all();
        $proximidades   = Proximidade::all();

        $action = route('admin.hortas.store');
        return view('admin.hortas.form', compact('action', 'escolas', 'tipos', 'finalidades', 'proximidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "Salvar";

        DB::beginTransaction();

        $horta = Horta::create($request->all());
        $horta->endereco()->create($request->all());

        if($request->has('proximidades')){

            $imovel->proximidades()->sync($request->proximidades);

        }

        DB::commit();

        $request->session()->flash('sucesso', "Horta incluída com sucesso!!!");
        return redirect()->route('admin.hortas.index');
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
        $horta = Horta::with(['escola','endereco','finalidade','tipo','proximidades'])->find($id);

        return view('admin.hortas.show', compact('horta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horta         = Horta::with(['escola','endereco','finalidade','tipo','proximidades'])->find($id);

        $escolas        = Escola::all();
        $tipos          = Tipo::all();
        $finalidades    = Finalidade::all();
        $proximidades   = Proximidade::all();

        $action = route('admin.hortas.update', $horta->id);
        return view('admin.hortas.form', compact('horta', 'action', 'escolas', 'tipos', 'finalidades', 'proximidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horta = Horta::find($id);

        DB::beginTransaction();

        $horta->update($request->all());
        $horta->endereco->update($request->all());

        if($request->has('proximidades')){
            $horta->proximidades()->sync($request->proximidades);
        }

        Db::Commit();

        $request->session()->flash('sucesso', "horta atualizada com Sucesso!!!");
        return redirect()->route('admin.hortas.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        ///echo "remover";
        $horta = Horta::find($id);

        DB::beginTransaction();

        //Remover endereço
        $horta->endereco->delete();

        //Remover o Horta
        $horta->delete();

        DB::Commit();

        $request->session()->flash('sucesso', "Horta Excluida com Sucesso!!!");
        return redirect()->route('admin.hortas.index');
    }
}
