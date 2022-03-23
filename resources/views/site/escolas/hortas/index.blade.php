@extends('site.layouts.main')

@section('title', 'Horta')

@section('content')

<h3 class="center">Horta Educativa</h3>

<div class="divider"></div>

 <div style="display: flex; flex-wrap: wrap">

</div>
<section class="section">
    <h4 class="center">
        <span class="teal-text">IMAGENS</span>
    </h4>

    <div style="display: flex; flex-wrap: wrap; justify-content: space-around">

        @foreach ($ihortas as $horta )

            @foreach ($horta->fotos as $foto)

            <img style="margin: 5px" width="195" height="130"  src="{{asset("storage/{$foto->url}")}}"/>

            @endforeach

        @endforeach


    </div>

</section>

@endsection
