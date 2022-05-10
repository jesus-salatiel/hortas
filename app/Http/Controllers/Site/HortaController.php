<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Escola;
use App\Models\Horta;
use Illuminate\Http\Request;

class HortaController extends Controller
{
    public function index($idHorta)
    {

        $escola = Escola::find($idEscola);

        $hortas = Horta::with(['finalidade', 'fotos'])
            ->where('escola_id', $idEscola)
            ->paginate(env('PAGINACAO'));


        return view('site.escolas.hortas.index', compact('escola', 'hortas'));
    }

    public function galeria($idEscola, $idHorta)
    {
        $escola = Escola::find($idEscola);

        $hortas = Horta::with(['finalidade', 'fotos'])
            ->where('escola_id', $idEscola)
            ->paginate(env('PAGINACAO'));


        return view('site.escolas', compact('escola', 'hortas'));

    }
    public function show($idEscola, $idHorta)
    {
        $horta = Horta::find($idHorta);

        return view('site.escolas.hortas.show', compact('horta'));

    }
}
