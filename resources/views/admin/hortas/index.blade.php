@extends('admin.layouts.main')

@section('title','Hortas')

@section('content')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Escola</th>
                    <th>Bairro</th>
                    <th>Título</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($hortas as $horta)
                    <tr>
                        <td>{{$horta->escola->nome}}</td>
                        <td>{{$horta->endereco->bairro}}</td>
                        <td>{{$horta->titulo}}</td>
                        <td class="right-align">
                            {{-- Fotos --}}
                            <a href="{{route('admin.hortas.fotos.index', $horta->id)}}">
                                <span>
                                    <i class="material-icons green-text text-light-2">insert_photo</i>
                                </span>
                            </a>
                            {{-- Ver --}}
                            <a href="{{route('admin.hortas.show', $horta->id)}}">
                                <span>
                                    <i class="material-icons indigo-text text-darken-2">remove_red_eye</i>
                                </span>
                            </a>
                            {{-- Editar --}}
                            <a href="{{route('admin.hortas.edit', $horta->id)}}">
                                <span>
                                    <i class="material-icons blue-text text-accent-2">edit</i>
                                </span>
                            </a>
                            {{-- Remover --}}
                            <form action="{{route('admin.hortas.destroy', $horta->id)}}" method="post" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button style="border:0;background:transparent" type="submit">
                                    <span style="cursor: pointer">
                                        <i class="material-icons red-text text-accent-3">delete_forever</i>
                                    </span>
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4"> Não existe Cadastro</td>
                    </tr>
                @endforelse
            </tbody>

        </table>

        <div class="fixed-action-btn">
            <a class="btm-floating btn-large waves-effect wave-light" href="{{route('admin.hortas.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </section>

@endsection
