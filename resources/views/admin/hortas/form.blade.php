@extends('admin.layouts.main')

@section('title', 'formulario')

@section('content')

    <section class="section">

        <form action="{{$action}}" method="POST">
            @csrf

            @isset($horta)
                @method('PUT')
            @endisset

            {{--titulo--}}
            <div class="row">
                <div div class="input-field col s12">
                     <input type="text" name="nome_horta" id="nome_horta" value="{{old('nome_horta', $horta->nome_horta?? '')}}"/>
                     <label for="titulo">Título Horta</label>
                </div>
            </div>

            {{-- Escola--}}
            <div class="row">
                <div class="input-field col s12">
                    <select name="escola_id" id="escola_id">
                        <option value="" disabled selected> Selecione uma Escola </option>

                            @foreach ($escolas as $escola)
                                <option value="{{$escola->id}}" {{old('escola_id') == $escola->id}}>

                                    {{$escola->nome}}</option>
                            @endforeach
                    </select>
                    <label for="escola_id">Escola</label>
                    @error('escola_id')
                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                    @enderror
                </div>
            </div>


            {{-- DESCRIÇÃO --}}
            <div class="row">

                <div class="input-field col s12">
                    <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>
                    <label for="descricao">Descrição</label>
                </div>

            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect " href="{{route('admin.hortas.index')}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit"> Salvar</button>
            </div>

        </form>

    </section>
@endsection
