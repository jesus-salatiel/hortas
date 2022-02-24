@extends('layouts.main')

@section('title', 'Escolas')

@section('content')

    <section>
        <table class="highlight">
            <thead>
                <tr>
                    <th>Escolas</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($escolas as $escola)
                    <tr>
                        <td>{{ $escola->nome }}</td>
                        <td class="right-align">
                            <a href="{{ route('admin.escolas.edit', $escola->id) }}">
                                <span>
                                    <i class="material-icons blue-text text-accent-2">edit</i>
                                </span>
                            </a>
                            <form action="{{ route('admin.escolas.destroy', $escola->id) }}" method="post"
                                style="display: inline">
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
                    <td colspan="2">Não existe cadastro</td>
                </tr>
                @endforelse
            </tbody>

        </table>

        <div class="fixed-action-btn">
            <a class="btm-floating btn-large waves-effect wave-light" href="{{route('admin.escolas.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
        {{--mensagem de inserção com sucesso--}}

        {{-- @if (session('sucesso'))
        <div>
            {{session('sucesso')}}
        </div>

       @endif --}}


    </section>

@endsection
