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

            {{-- Foto de Capa --}}
            <div class="row">

                <div class="input-field col s12">
                    <input type="file" name="foto" id="foto">
                    {{-- <label for="foto">Foto</label> --}}
                </div>

            </div>


            {{-- DESCRIÇÃO --}}
            <div class="row">

                <div class="input-field col s12">
                    <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>
                    <label for="descricao">Descrição</label>
                </div>

            </div>



            <!-- {{-- Tipo--}}
            <div class="row">
                <div class="input-field col s12">
                    <select name="tipo_id" id="tipo_id">
                        <option value="" disabled selected>Selecione um tipo de horta</option>

                            {{-- @foreach ($tipos as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                            @endforeach --}}
                    </select>
                    <label for="tipo_id">horta</label>
                </div>
            </div>

            {{-- finalidade --}}

            {{-- <div class="row">

                @foreach ($finalidades as $finalidade )
                    <span>
                        <label style="margin-right: 30px">
                            <input type="radio" name="finalidade_id" id="finalidade_id" class="with-gap" value="{{$finalidade->id}}">
                            teste<span>{{$finalidade->nome}}</span>
                        </label>
                    </span>
                @endforeach
            </div> --}}

            {{-- domitorios--}}

            <div class="row">

                <div class="input-field col s4">
                    <input type="number" name="preco" id="preco"/>
                    <label for="preco">Preço</label>
                </div>
                <div class="input-field col s4">
                    <input type="number" name="dormitorios" id="dormitorios"/>
                    <label for="dormitorios"> Quantidade</label>
                </div>
                <div class="input-field col s4">
                    <input type="number" name="salas" id="salas"/>
                    <label for="salas"> Quantidade</label>
                </div>

            </div>

            {{-- Banheiros terrenos --}}
            <div class="row">

                <div class="input-field col s4">
                    <input type="number" name="preco" id="preco"/>
                    <label for="preco">Preço</label>
                </div>
                <div class="input-field col s4">
                    <input type="number" name="dormitorios" id="dormitorios"/>
                    <label for="dormitorios"> Quantidade</label>
                </div>
                <div class="input-field col s4">
                    <input type="number" name="salas" id="salas"/>
                    <label for="salas"> Quantidade</label>
                </div>

            </div>

            {{-- Banheiros terrenos --}}
            <div class="row">

                <div class="input-field col s12">
                    <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>
                    <label for="descricao">Descrição</label>
                </div>

            </div>

             {{-- Endereço --}}
            <div class="row">

                <div class="input-field col s4">
                    <input type="text" name="rua" id="rua"/>
                    <label for="rua">Rua</label>
                </div>
                <div class="input-field col s2">
                    <input type="number" name="numero" id="numero"/>
                    <label for="numero">Número</label>
                </div>
                <div class="input-field col s2">
                    <input type="text" name="comp" id="comp"/>
                    <label for="comp">Complemento</label>
                </div>
                <div class="input-field col s4">
                    <input type="text" name="bairro" id="bairro"/>
                    <label for="bairro"> Bairro</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select name="proximidades[]" id="proximidades" multiple>
                        <option value="" disabled> Selecione os pontos</option>

                        {{-- @foreach ($proximidades as $proximidade )
                            <option value="{{$proximidade->id}}">{{$proximidade->nome}}</option>
                        @endforeach --}}

                    </select>
                </div>

            </div> -->

            <div class="right-align">
                <a class="btn-flat waves-effect " href="{{route('admin.hortas.index')}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit"> Salvar</button>
            </div>

        </form>

    </section>
@endsection
