@extends('site.layouts.main')

@section('title', 'visualizar')

@section('content')

<section class="section">

    <div class="row">
        <span class="col s12">
            <h5>Cidade</h5>
            <p>{{$horta->escola->nome}}</p>
        </span>
    </div>



</section>

<!-- imagens -->

<section class="section">
    <h4 class="center">
        <span class="teal-text">IMAGENS</span>DA HORTA
    </h4>

    <div style="display: flex; flex-wrap: wrap; justify-content: space-around">

        @foreach ($horta->fotos as $foto)

            <img style="margin: 5px" width="195" height="130"  src="{{asset("storage/{$foto->url}")}}"/>

        @endforeach

    </div>

</section>





@endsection
