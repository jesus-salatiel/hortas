@extends('admin.layouts.main')

@section('title', 'Formulário')

@section('content')

    <section class="section">

        <form action="{{$action}}" method="POST">
            @csrf

            @isset($download)
                @method('PUT')
            @endisset

            {{--titulo--}}
            <div class="row">
                <div div class="input-field col s12">
                     <input type="text" name="name" id="name" value="{{old('name', $download->name?? '')}}"/>
                     <label for="name">Título Apostila</label>
                </div>
            </div>

            {{-- Escola--}}
            {{-- <div class="row">
                <div class="input-field col s12">
                    <select name="escola_id" id="escola_id">
                        <option value="" disabled selected> Selecione uma Escola </option>

                            @foreach ($escolas as $escola)
                                <option value="{{$escola->id}}" {{old('escola_id',$horta->escola->id ?? '' ) == $escola->id ? 'selected' : ''}}>{{$escola->nome}}</option>
                            @endforeach
                    </select>
                    <label for="escola_id">Escola</label>
                    @error('escola_id')
                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                    @enderror
                </div>
            </div> --}}


            {{-- DESCRIÇÃO --}}
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="descricao" id="descricao" class="materialize-textarea">{{old('descricao', $download->descricao?? '')}}</textarea>
                    <label for="descricao">Descrição</label>
                </div>
            </div>
            {{-- LINK das APOSTILAS --}}
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="url" id="url" class="materialize-textarea">{{old('url', $download->url?? '')}}</textarea>
                    <label for="url">Link Apostila</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select name="" id=""></select>
                    <label for="url">Foto de Capa</label>
                </div>

            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect " href="{{route('admin.downloads.index')}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit"> Salvar</button>
            </div>

        </form>

    </section>
@endsection
