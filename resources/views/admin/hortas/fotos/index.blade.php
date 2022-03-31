@extends('admin.layouts.main')

@section('style_card')
<style>
.caixa-horta {
        display: flex;
        flex-wrap: wrap;
        padding: 30px 15px;
        gap: 27px;
        justify-content: center;
    }

</style>

@endsection

@section('title', 'fotos')

@section('content')
<h4><strong>{{ $horta->nome_horta }}</strong></h4>

<section class="section">



    <div class="card caixa-horta" style="width: 100%; height: 100%;">
        @forelse($fotos as $foto )
            <div class="card" style="width: 213px; height: 241px; min-width:150px">

                <div class="card-image waves-effect waves-block waves-light ">
                    <img src="{{ asset("storage/$foto->url") }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i
                            class="material-icons right">more_vert</i></span>
                    <span style="font-size:110%"><strong> INFORMAÇÕES</strong></span>
                </div>
                <span>
                    <form
                        action="{{ route('admin.hortas.fotos.destroy', [$horta->id, $foto->id]) }}"
                        method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')

                        <button style="border:0;background:transparent;" type="submit" title="remover">
                            <span style="cursor: pointer">
                                <i class="material-icons red-text text-accent-3"
                                    style="padding-right: 10px">delete_forever</i>
                            </span>
                        </button>

                    </form>
                </span>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Informações<i
                            class="material-icons right">close</i></span>
                    <p style="text-align: justify">{{ $horta->descricao }}</p>
                    <a href="http://"></a>
                </div>
            </div>

        @empty

            <div>Não existem fotos cadastradas</div>

        @endforelse



        <div class="fixed-action-btn">
            <a href="{{ route('admin.hortas.fotos.create', $horta->id) }}"
                class="btn-floating btn-large red darken-4">
                <i class="large material-icons">add</i>
            </a>
        </div>
</section>

@endsection
