@extends('admin.layouts.main')
@section('title', 'Descrição Welcome')

@section('content')
<div class="container">

    <div class="card-content">

        @foreach ($welcome as $text)


    <div class="container">

        <div class="card">
            <div class="card-content">
                <span style="text-align: center" class="card-title">
                   <strong>DESCRIÇÃO PÁGINA INICIAL</strong>
                </span>
                <p style="text-align: justify">{{$text->description}}</p>

            </div>
            <div class="card-action">
                <a href="{{route('admin.welcomes.edit', $text->id)}}" class="red-text">Alterar</a>
                <a href="{{route('admin.hortas.index')}}" class="red-text">cancelar</a>
            </div>
        </div>





    @endforeach
    </div>


</div>

@endsection
