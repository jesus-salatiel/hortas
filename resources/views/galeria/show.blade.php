
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

    <div class="row">
        <span class="col s12">
            <h5>Escola</h5>
            <p>{{$horta->nome_horta}}</p>
        </span>
    </div>

    <div class="card caixa-horta" style="width: 100%; height: 100%;">


        @foreach ( $horta->fotos as $foto )

            <div class="card" style="width: 300px; height: 370px; min-width:150px">

                <div class="card-image waves-block waves-light ">
                    <img class="materialboxed" src="{{ asset("storage/{$foto->url}") }}">
                </div>
            </div>
        @endforeach

        {{-- <div class="card-image waves-effect waves-block waves-light ">

            @foreach ($horta->fotos as $foto )
                <div style="display: flex; flex-wrap: wrap; justify-content: space-around; width: 213px; height: 241px; min-width:150px">
                    <img src="{{ asset("storage/{$foto->url}") }}">
                </div>
            @endforeach
        </div> --}}




    </div>







</section>



@endsection


