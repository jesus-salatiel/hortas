
@extends('layouts.main_site')

@section('style_card')
<style>
.caixa-horta {
        display: flex;
        flex-wrap: wrap;
        padding: 11px;
        gap: 11px;
        justify-content: center;
    }

</style>

@endsection

@section('title', 'Horta Educativa')

@section('content')

{{-- <h4><strong>{{ $horta->nome_horta }}</strong></h4> --}}

<section class="section">

    <h1>GALERIA</h1>

    <div class="card caixa-horta" style="width: 100%; height: 100%;">

        @foreach ($hortas as $horta)

            {{-- @php
                if($horta->fotos->isEmpty()){
                    $tmp = '';

                } else {
                    $tmp = $horta->fotos[0]->url;

                } --}}
            @endphp
            {{-- @foreach ( $fotos as $foto ) --}}

            {{-- @dd($horta->escolas->nome) --}}

            <div class="card" style="width: 300px; height: 370px; min-width:150px">

                <div class="card-image waves-effect waves-block waves-light ">
                    <img src="storage/{{ $horta->fotos[0]->url }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i
                            class="material-icons right">more_vert</i></span>
                    <span style="font-size:110%"><strong> INFORMAÇÕES</strong></span> <br><br>
                    <div style="font-size:110%; font-weight: bold;"> Horta da Escola: </div>
                    <div style="font-size:130%">{{ $horta->escola['nome'] }}</div>
                    <div>
                        <a href="{{ route('galeria.show', [$horta->id]) }}">Galeria de Fotos</a>
                    </div>
                </div>

                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Informações<i
                            class="material-icons right">close</i></span>
                    <p style="text-align: justify">{{ $horta->descricao }}</p>
                    <a href="http://"></a>
                </div>
            </div>

            {{-- @endforeach --}}
        @endforeach




</section>

@endsection


