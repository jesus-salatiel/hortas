@extends('layouts.main')

@section('title', 'Formulário')

@section('content')

    <section class="section">

        <div class="row">
            <form class="col s12" action="{{route('admin.hortas.store')}}" method="POST">
                @csrf
                {{-- Seleciona Escola --}}

                <div class="row">
                    <div class="input-field col s12">
                        <select name="escola_id" id="escola_id">
                            <option value=""> Selecione a Unidade Escolar</option>
                            @foreach ($escolas as $escola )
                                <option value="{{$escola->id}}">{{ $escola->escola }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="nome_horta" id="nome_horta" value="{{ old('nome_horta', '') }}" />
                  <label for="nome_horta"><strong>Nome Horta:</strong></label>
                </div>
              </div>
              {{-- <div class="row">
                <div class="input-field col s12">
                  <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                  <label for="disabled">Disabled</label>
                </div> --}}
                {{-- Foto de capa --}}
                {{-- <div class="file-field input-field">
                    <div class="btn">
                      <span>Foto de Capa:</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                </div> --}}
                <div class="right-align">
                    <a class="btn-flat waves-effect " href="{{route('admin.hortas.index')}}">Cancelar</a>
                    <button class="btn waves-effect waves-light" type="submit"> Salvar</button>
                </div>


            </form>
          </div>




    </section>
@endsection
