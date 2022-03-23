@extends('site.layouts.main')

@section('title', 'escolas')

@section('content')
    <section class="section lighten-4 center">

        <div style="display: flex; flex-wrap: wrap; justify-content: space-around">


            @foreach ($hortas as $horta )

            @endforeach


            @foreach ($escolas as $escola )



                    <div class="card" style="width: 290px; margin: 10px">

                        <div class="card-image" style="width: 280px; height: 100%;">

                            @if (count($horta->fotos) > 0)


                                    <div class="card-content">

                                        <a href="{{ route('escolas.hortas.index', $escola->id) }}">
                                        <img src="{{ asset("storage/{$horta->fotos[0]->url}") }}">
                                        <h4 class="black-text">{{ $escola->nome }}</h4>
                                        <p>Descrição:{{ $horta -> descricao }}</p>

                                    </div>


                            @endif
                        </div>
                    </div>




            @endforeach


        </div>

    </section>


    {{-- <div style="display: flex; flex-wrap: wrap">

    @forelse ($imoveis as $imovel)

        <div class="card" style="width: 290px; margin: 10px">

            <div class="card-image">
                @if (count($imovel->fotos) > 0)
                    <img src="{{ asset("storage/{$imovel->fotos[0]->url}") }}">
                @endif
            </div>

            <div class="card-content">

                <p class="card-title">
                    {{$imovel->titulo}}
                </p>
                <p>
                    Preço: <strong>{{$imovel->preco}}</strong>
                </p>
                <p>
                    Descrição: <strong>{{ $imovel->descricao}}</strong>
                </p>

            </div>

        </div>

    @empty
        <p>Não há Projetos</p>
    @endforelse

</div>  --}}

@endsection
