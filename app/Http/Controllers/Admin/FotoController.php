<?php

namespace App\Http\Controllers\Admin;

use Config\App;
use App\Models\Foto;
use App\Models\Horta;
use Illuminate\Http\Request;
use App\Http\Requests\FotoRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idHorta)
    {
        $horta = Horta::find($idHorta);

        $fotos = Foto::where('horta_id', $idHorta)->get();

        return view('admin.hortas.fotos.index', compact('horta', 'fotos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idHorta)
    {
        $horta = Horta::find($idHorta);
        return view('admin.hortas.fotos.form', compact('horta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FotoRequest $request, $idHorta)
    {
    //    dd($request->file('foto'));
    //    dd($idHorta);



        //checar se veio a imagem na requisição
       if($request->hasFile('foto')){

            // checar se há erros no upload
            if($request->foto->isValid()){


                // // Pegando o caminho e o nome do arquivo para salvar no disco
                $fotoUrl = $request->foto->hashName("hortas/$idHorta");

                // dd($fotoUrl);

                // redimensionando imagem
                $imagem = Image::make($request->foto)->fit(env('FOTO_LARGURA'), env('FOTO_ALTURA'));

                // Salvar no disco
                Storage::disk('public')->put($fotoUrl, $imagem->encode());


                //armazenando caminho DB
                $foto = new Foto();
                $foto->url = $fotoUrl;
                $foto->horta_id = $idHorta;
                $foto->save();

            }

       }

       $request->session()->flash('sucesso', 'Foto incluida com sucesso!!!');
       return redirect()->route('admin.hortas.fotos.index', $idHorta);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idHorta, $idFoto)
    {
        $foto = Foto::find($idFoto);

        //apagar imagem no disco
        Storage::disk('public')->delete($foto->url);
        //apagando o registro no DB
        $foto->delete();
        $request->session()->flash('sucesso', 'Foto excluída com sucesso!!!');
        return redirect()->route('admin.hortas.fotos.index', $idHorta);

    }
}
