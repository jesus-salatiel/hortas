
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



    <div class="card caixa-horta" style="width: 100%; height: 100%;">
        @foreach ($hortas as $horta)


            <div class="card" style="width: 300px; height: 370px; min-width:150px">

                <div class="card-image waves-effect waves-block waves-light ">
                    <img src="{{ asset("$horta->foto") }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i
                            class="material-icons right">more_vert</i></span>
                    <span style="font-size:110%"><strong> INFORMAÇÕES</strong></span>
                </div>

                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Informações<i
                            class="material-icons right">close</i></span>
                    <p style="text-align: justify">{{ $horta->descricao }}</p>
                    <a href="http://"></a>
                </div>
            </div>


        @endforeach




</section>

@endsection


