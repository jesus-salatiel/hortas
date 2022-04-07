@extends('layouts.main_site')

@section('title', 'Informações')

@section('content')
<div class="card">
    <div class="col s12 m7">
        <h3 style="text-align: center" class="header">AGRIÃO</h3>
        <div class="card horizontal">
          <div class="card-image">
            <img src="{{ asset('image/image1.jpg') }}">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>O agrião é uma fonte natural de luteína e zeoxantina, dois carotenóides que são reconhecidos pela sua habilidade em proteger a visão e auxiliam na prevenção de problemas relacionados com o envelhecimento. Possui atividade anticancerígena, com benefícios demonstrados contra o câncer de cólon, mama, pulmões, próstata; antioxidante; anti-inflamatória; e apresenta efeitos cardiovasculares benéficos. .</p>
            </div>
            <div class="card-action">
              <a href="#">Link YouTube</a>
            </div>
          </div>
        </div>
      </div>


   <div class="col s12 m7">
    <h3 style="text-align: center" class="header">ALFACE</h3>
    <div class="card horizontal">
      <div class="card-image">
        <img src="{{ asset('image/image1.jpg') }}">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>A alface é pobre em calorias, gordura e sódio. É uma boa fonte de fibra, ferro, ácido fólico e vitamina C. Estudos demonstraram atividades antiinflamatórias, redutoras do colesterol e antidiabéticas atribuídas aos compostos bioativos da alface.
            Entre os benefícios para a saúde, incluem: perda de peso devido ao seu baixo conteúdo calórico, redução do risco de doenças cardiovasculares por reduzir o colesterol de baixa densidade (LDL) e pressão do sangue, reduzindo o risco de diabetes, melhorando o metabolismo da glicose e diminuindo o risco de câncer de cólon.
            </p>
        </div>
        <div class="card-action">
          <a href="#">Link YouTube</a>
        </div>
      </div>
    </div>
  </div>


   <div class="col s12 m7">
    <h3 style="text-align: center" class="header">ALECRIM</h3>
    <div class="card horizontal">
      <div class="card-image">
        <img src="{{ asset('image/image1.jpg') }}">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>O alecrim usado in natura tem nutrientes dos mais importantes para o corpo humano. No que se refere as propriedades medicinais, é considerado um poderoso anti-inflamatório. Seus óleos essências possuem efeito vasodilatador, que podem ajudar a dilatar os vasos sanguíneos, diminuindo a pressão deles. Melhora a circulação nas extremidades do corpo, sendo usado para o tratamento de casos de mãos e pés frios, doença de Raynaud, e ainda para se melhorar a memória. .</p>
        </div>
        <div class="card-action">
          <a href="#">Link YouTube</a>
        </div>
      </div>
    </div>
  </div>

   <div class="col s12 m7">
    <h3 style="text-align: center" class="header">BETERRABA</h3>
    <div class="card horizontal">
      <div class="card-image">
        <img src="{{ asset('image/image1.jpg') }}">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>O consumo de todas as partes da beterraba é de extrema importância, pois eles irão garantir inúmeros benefícios à saúde, a beterraba apresenta muitos minerais e vitaminas em sua composição como: Pró-vitamina A, vitamina B1, B2, B5, C, potássio, sódio, fósforo, cálcio, zinco, ferro e manganês, além de possuir pectina, celulose e hemicelulose, que são boas fontes de fibras dietéticas. Atua como um auxiliar na redução da pressão arterial, como também é um ótimo antioxidante natural, agindo contra o envelhecimento celular e reduzindo o risco de alguns tipos de câncer. </p>
        </div>
        <div class="card-action">
          <a href="#">Link YouTube</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
