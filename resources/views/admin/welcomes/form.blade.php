@extends('admin.layouts.main')

@section('title', 'formulario')

@section('content')

    <section class="section">

        <form action="{{$action}}" method="POST">
            {{-- @dd($action) --}}
            @csrf

            @isset($text)
                @method('PUT')
            @endisset


            <div class="card-content">

                @foreach ($welcomes as $texto)


            <div class="container">

                <div class="card">
                    <div class="card-content">
                        <span style="text-align: center" class="card-title">
                           <strong>DESCRIÇÃO PÁGINA INICIAL</strong>
                        </span>
                        <p style="text-align: justify">{{$texto->description}}</p>

                    </div>

                </div>
            </div>
            @endforeach
            </div>

            {{-- DESCRIÇÃO --}}
            <div class="container">

                <div class="input-field col s12">
                    <textarea name="description" id="description" class="materialize-textarea">{{old('description', $text->description?? '')}}</textarea>
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
