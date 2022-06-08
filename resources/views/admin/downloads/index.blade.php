@extends('admin.layouts.main')

@section('title','Apostilas')

@section('content')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Apostila</th>

                    <th>Título</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($downloads as $download)
                    <tr>
                        <td>{{$download->name}}</td>
                        <td>{{$download->descricao}}</td>
                        <td class="right-align">

                            {{-- Editar --}}
                            <a href="{{route('admin.downloads.edit', $download->id)}}">
                                    <span>
                                        <i class="material-icons blue-text text-accent-2">edit</i>
                                    </span>
                            </a>
                            {{--Abrir Modal Remover --}}

                            <button data-target="modal_delete" class="modal-trigger" style="border:0;background:transparent" type="submit">
                                <span style="cursor: pointer">
                                    <i class="material-icons red-text text-accent-3">delete_forever</i>
                                </span>
                            </button>


                           <!-- Modal Structure -->
                            <div class="modal" id="modal_delete">
                                <div class="modal-content">
                                    <h2 style="text-align: center"> <strong> DELETARÁS !!!</strong></h2>
                                    <h3 style="text-align: center">TEM PLENA CERTEZA DE SUA AÇÃO?</h3>
                                    <h5 style="text-align: justify">SEU ARQUIVO SERÁ PERMANENTEMENTE DELETADO, EXCLUIDO, JOGADO FORA, PERDIDO PRA SEMPRE NO BURACO NEGRO. QUERES CONTINUAR A AÇÃO DE EXCLUSÃO?</h5>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn modal-close modal-action">SAIR</a>
                                    <form action="{{route('admin.downloads.destroy', $download->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="waves-effect waves-green btn" type="submit">
                                            <span style="cursor: pointer">DELETAR</span>
                                        </button>
                                    </form>
                                </div>
                            </div>

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
            <a class="btm-floating btn-large waves-effect #1565c0 blue darken-2  btn" href="{{route('admin.downloads.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>


@endsection
