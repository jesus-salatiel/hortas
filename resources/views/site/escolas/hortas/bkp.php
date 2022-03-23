{{-- <div style="display: flex; flex-wrap: wrap">

@forelse ($imoveis as $imovel)

    <div class="card" style="width: 290px; margin: 10px">

        <div class="card-image">
            @if (count($imovel->fotos) > 0)
                <img src="{{ asset("storage/{$imovel->fotos[0]->url}") }}">
            @endif
        </div>

        <div class="card-content">

            <p class="card-title">
                {{$imovel->titulo}}
            </p>

            <p>
                Descrição: <strong>{{ $imovel->descricao}}</strong>
            </p>

        </div>

    </div>

@empty
    <p>Não há Projetos</p>
@endforelse

</div> --}}
