
@extends('layouts.main_site')

@section('style_card')
<style>
.caixa-horta {
        display: flex;
        flex-wrap: wrap;
        padding: 11px;
        gap: 11px;
        justify-content: center;
    }

</style>

@endsection

@section('title', 'Horta Educativa')

@section('content')

{{-- <h4><strong>{{ $horta->nome_horta }}</strong></h4> --}}
{{-- @dd($welcomes) --}}

<section class="section">

    <div class="card-panel" style="width: 100%; height: 100%;">
        <div class="row">
            <div class="col s12 m12">
              <div class="card-panel">
                {{-- <div class="card-image"> --}}
                 <a href="{{ route('galeria.index') }}"><img class="responsive-img" src="image/Logo-projeto.png"></a>
                </div>
                <div class="card-content">
                    @foreach ($welcomes as $welcome )






                            <p style="text-align: justify">{{ $welcome->description }}</p>


                            <p style="text-align: justify">O Projeto Horta Educativa, que tem como objetivo o cultivo de hortas e espaços verdes nas unidades escolares. A interação e a criação de vínculos com a natureza possibilitam o desenvolvimento das crianças em termos sociais, afetivos, cognitivos e motores. As hortas misturam pedagogia e consciência ambiental, cultivo, inclusão e consumo de alimentação saudável, tudo isso em um só espaço, incentivando as boas práticas na continuidade de seus cuidados. As hortas são espaços de aprendizado e podem ser utilizadas como ferramenta em diversas disciplinas. Incentivamos a formação de uma rede de apoio com a comunidade e famílias para realização do cuidado diário da horta.</p><br>
                              <p> Coordenação: Setor de Projetos (Secretaria Municipal de Educação de Caraguatatuba)<br>
                              Telefone de contato: (12) 3897-7009
                              Supervisão: Maristela Ap. de Souza
                              </p>



                    @endforeach
                </div>
                <div class="card-action">
                  <a href="{{ route('galeria.index') }}">GALERIA DAS HORTAS</a>
                </div>
              </div>
            </div>
          </div>

    </div>



</section>

@endsection


