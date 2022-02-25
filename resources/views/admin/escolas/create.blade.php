@extends('layouts.main')

@section('title', 'Formulário')

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

        <form action="{{$action}}" method="post">

            @csrf
            @isset($escola)
                @method('PUT')
            @endisset
            <div class="imput-field">
                <input type="text" name="nome" id="nome" value="{{old('nome', $escola->nome_escola ?? '')}}"/>
                <label for="nome">Nome<label>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
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
