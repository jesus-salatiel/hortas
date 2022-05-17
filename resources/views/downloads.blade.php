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

@section('title', 'Downloads')

@section('content')


{{-- @dd($downloads) --}}

<section class="section">

    <h1>DOWNLOADS</h1>

    <div class="card caixa-horta" style="width: 100%; height: 100%;">

        @foreach ($downloads as $download)

            <div class="card" style="width: 210px; height: 310px; min-width:110px">

                <div class="card-image waves-effect waves-block waves-light ">
                    <img src="{{ $download->foto}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i
                            class="material-icons right">more_vert</i></span>
                    <span style="font-size:110%"><strong>Conteúdo</strong></span> <br>
                    <p class="truncate">{{ $download->descricao }}</p>
                    <a href="{{ $download->url }}">DOWNLOAD</a>
                </div>

                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Informações<i
                        class="material-icons right">close</i></span>
                    <p style="text-align: justify">{{ $download->descricao }}</p>

                </div>
            </div>


        @endforeach


</section>


@endsection
