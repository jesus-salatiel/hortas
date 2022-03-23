<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Escola;
use App\Models\Horta;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function index()
    {

        $escolas = Escola::orderBy('nome')->get();
        $hortas = Horta::all();
        //$imovel = Imovel::with(['finalidade', 'fotos'])->get();




      //dd($imovel);

        return view('site.escolas.index', compact('escolas', 'hortas'));
    }
}
