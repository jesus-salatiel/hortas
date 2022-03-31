@extends('admin.layouts.main')

@section('title', 'inserção fotos')

@section('content')

    <section class="section">
        <form action="{{route('admin.hortas.fotos.store', $horta->id)}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="file-field input-field">
                <div class="btn blue ">
                    <span>Selecionar Fotos</span>
                    <input type="file" name="foto">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate"/>
                </div>

                @error('foto')
                <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                @enderror

                <div class="right-align">
                    <a href="{{url()->previous()}}" class="btn waves-effect red">Cancelar</a>
                    <button class="btn-large waves-effect waves-light blue" type="submit">Salvar</button>
                </div>

            </div>

        </form>

    </section>

@endsection
