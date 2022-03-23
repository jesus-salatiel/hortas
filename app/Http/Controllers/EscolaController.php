<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EscolaRequest;
use App\Models\Escola;

class EscolaController extends Controller
{
    public function escolas()
    {
        $subtitulo = 'Lista de escolas';

        $escolas = Escola::all();



        return view('admin.escolas.index', compact('subtitulo', 'escolas'));
    }

    public function formAdicionar()
    {
        return view('admin.escolas.form');
    }

    public function adicionar(EscolaRequest $request)
    {
        // pegando os dados enviados
        //$nome = $request->input('nome');
        //echo $nome;

        //criar objeto da classe
        // $escola = new Escola();
        // $escola->nome = $request->nome;

        // $escola->save(); // salvar no DB

        Escola::create($request->all());

        $request->session()->flash('sucesso', "Escola $request->nome incluida com sucesso!");

        return redirect()->route('admin.escolas.listar');

    }

    public function deletar($id, Request $request)
    {
        Escola::destroy($id);
        $request->session()->flash('sucesso', "Escola excluida com sucesso!!!");
        return redirect()->route('admin.escolas.listar');

    }

    public function formEditar($id)
    {
        $escola = Escola::find($id);
        $action = route('admin.escolas.editar', $escola->id);
        return view('admin.escolas.form', compact('escola', 'action'));
    }

    public function editar(EscolaRequest $request, $id)
    {
       $escola = Escola::find($id);
       $escola->update($request->all());

       $request->session()->flash('Sucesso', "Escola alterada com sucesso!!!");
       return redirect()->route('admin.escolas.listar');
    }
}
