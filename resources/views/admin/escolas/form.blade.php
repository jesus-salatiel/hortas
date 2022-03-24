@extends('admin.layouts.main')

@section('title', 'formulario')

@section('content')

    <section class="section">

      {{-- mensagens de erro


        @if ($errors->any())
            <div class="red-text">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif
                --}}






        <form action="{{$action}}" method="POST">

            @csrf
            @isset($escola)
                @method('PUT')
            @endisset
            <div class="imput-field">
                <input type="text" name="nome" id="nome" value="{{old('nome', $escola->nome ?? '')}}"/>
                <label for="nome">Nome<label>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select name="nome" id="nome">
                        <option value="{{ old('nome', $escola->nome ?? '')}}"> Selecione a Escola</option>

                        @foreach ($escolas as $escola )
                            <option value="{{$escola->id}}">{{$escola->nome}}</option>
                        @endforeach

                    </select>
                </div>

            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{route('admin.escolas.index')}}">Cancelar</a>
                <button class="btn waves-effet waves-light" type="submit">
                    Salvar
                </button>
            </div>
        </form>

    </section>

@endsection
