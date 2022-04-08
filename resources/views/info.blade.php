@extends('layouts.main_site')

@section('style_card')

<style>
.card.horizontal .card-image img {
            border-radius: 2px 0 0 2px;
            max-width: 225px;
            width: auto;
            }

p{
    text-align: justify;
}
</style>

@endsection

@section('title', 'Informações')

@section('content')
    <div class="card">
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">AGRIÃO</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/agriao.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>O agrião é uma fonte natural de luteína e zeoxantina, dois carotenóides que são reconhecidos pela
                            sua habilidade em proteger a visão e auxiliam na prevenção de problemas relacionados com o
                            envelhecimento. Possui atividade anticancerígena, com benefícios demonstrados contra o câncer de
                            cólon, mama, pulmões, próstata; antioxidante; anti-inflamatória; e apresenta efeitos
                            cardiovasculares benéficos.</p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/8gYmDD-TnU4">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">ALECRIM</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/alecrim.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>O alecrim usado in natura tem nutrientes dos mais importantes para o corpo humano. No que se
                            refere as propriedades medicinais, é considerado um poderoso anti-inflamatório. Seus óleos
                            essências possuem efeito vasodilatador, que podem ajudar a dilatar os vasos sanguíneos,
                            diminuindo a pressão deles. Melhora a circulação nas extremidades do corpo, sendo usado para o
                            tratamento de casos de mãos e pés frios, doença de Raynaud, e ainda para se melhorar a memória.
                            </p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/AO87DN3fxig">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">ALFACE</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/alface.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>A alface é pobre em calorias, gordura e sódio. É uma boa fonte de fibra, ferro, ácido fólico e
                            vitamina C. Estudos demonstraram atividades antiinflamatórias, redutoras do colesterol e
                            antidiabéticas atribuídas aos compostos bioativos da alface.
                            Entre os benefícios para a saúde, incluem: perda de peso devido ao seu baixo conteúdo calórico,
                            redução do risco de doenças cardiovasculares por reduzir o colesterol de baixa densidade (LDL) e
                            pressão do sangue, reduzindo o risco de diabetes, melhorando o metabolismo da glicose e
                            diminuindo o risco de câncer de cólon.
                        </p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/womHNp7r0SA">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">BETERRABA</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/beterraba.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>O consumo de todas as partes da beterraba é de extrema importância, pois eles irão garantir
                            inúmeros benefícios à saúde, a beterraba apresenta muitos minerais e vitaminas em sua composição
                            como: Pró-vitamina A, vitamina B1, B2, B5, C, potássio, sódio, fósforo, cálcio, zinco, ferro e
                            manganês, além de possuir pectina, celulose e hemicelulose, que são boas fontes de fibras
                            dietéticas. Atua como um auxiliar na redução da pressão arterial, como também é um ótimo
                            antioxidante natural, agindo contra o envelhecimento celular e reduzindo o risco de alguns tipos
                            de câncer. </p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/38mXJdk2nSQ">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">CEBOLA</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/cebola.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>A cebola é caracterizada por seus marcantes compostos organosulfurados, os quais possuem aroma distinto e pungente. A cebola é uma hortaliça fonte de diversos fitonutrientes reconhecidos como componentes importantes na alimentação humana, sendo usada principalmente na prevenção e tratamento de diversas doenças incluindo câncer, doenças cardiovasculares, obesidade, hipercolesterolemia, diabetes tipo 2, hipertensão, catarata e distúrbios do sistema digestivo. Essas ações bioativas estão relacionadas aos compostos organosulforados e flavonóides encontrados nessa hortaliça, que são micronutrientes que contribuem com a homeostase humana, tendo um papel importante na manutenção da saúde.</p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/uEhh0Ztl79Y">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">CEBOLINHA</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/cebolinha.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Atua na prevenção de câncer tipo de estomago e esôfago; fortalece ossos; limita danos neurais e ajuda contra o Alzheimer; atua contra problemas digestivos; promove a saúde do coração; melhora o sistema imunológico; promove a saúde ocular; atua desintoxicando o corpo; ajuda no sistema circulatório; tem baixa gordura, sal e calorias; atua na limpeza da pele; cabelos fortes e ainda ajuda no tratamento de baixa libido.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">CENOURA</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/cenoura.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>A cenoura é a mais importante fonte de pró-vitamina A na dieta humana em várias regiões do mundo, por ser uma das poucas plantas capazes de acumular alfa e betacaroteno, as duas formas principais de pró-vitamina A.
                          É uma grande fonte de carotenóides, fibras, vitaminas, minerais e outros componentes bioativos, proporcionando uma série de benefícios para a saúde. Existem alguns estudos que relacionam que o seu consumo pode ajudar na prevenção do câncer, devido aos carotenóides presentes.
                          </p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/pbu5VzRfSB0">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">COENTRO</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/coentro.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Sua utilização pode ser feita através do seu caule, raiz, folhas, frutos e sementes, secos ou in natura, também com utilização medicinal. Nesta, dá-se enfoque para as suas propriedades nutricionais e farmacêuticas, suas sementes e seu óleo essencial, com atividades antioxidantes, antimicrobianas, hipoglicemiante, anti-hiperlipidêmica, analgésica, anti-inflamatória, anti-convulsivante entre outras; </p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/ggoKiGj4_N0">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">COUVE</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/couve.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>A couve é considerada um alimento altamente nutritivo, pois tem baixas calorias com níveis moderados de proteína, em sua forma in natura. As folhas de couve são fontes de aminoácidos essenciais, possuindo em sua composição minerais como cálcio, magnésio, ferro, zinco e manganês, além de compostos bioativos, capazes de reduzir o surgimento de doenças degenerativas. </p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/8rjZQtiBaAg">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">ERVA-CIDREIRA</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/ervacidreira.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Entre todas as espécies que são consideradas medicinais, a Erva cidreira (Melissa Officinalis L.) se destaca. É uma planta aromática com ramos de 30 cm a 60 cm de altura. Possui  folhas rugosas de 3 cm a 6 cm de comprimento, de cor verde escuras na parte superior e verde claro na inferior. As suas folhas podem ser utilizadas na forma de chá, de preferência com a planta fresca, como calmante nos casos de ansiedade e insônia, e como medicação contra dispepsia (má digestão), gripe, bronquite crônica, cefaleias, enxaqueca, dores reumáticas, para normalizar as funções gastrointestinais e no tratamento de manifestações virais.  A infusão pode ser feita com uma colher se sobremesa de erva cidreira, sendo as folhas e ramos frescos ou secos bem picados. Recomenda-se também como banho relaxante de imersão durante 15 minutos, preparado pela adição de meio litro de água fervente sobre 15 colheres de sopa de erva cidreira. A melissa torna-se, assim, um dos fitoterápicos mais utilizados no tratamento da ansiedade, especialmente por sua palatabilidade e alta aceitação sensorial. Ainda, pode melhorar as crises de dores de cabeças e também insônia, sintomas comum em indivíduos que sofrem de ansiedade.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">HORTELÃ</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/hortela.png') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Conhecido pelo seu nome científico de mentha x villosaHuds, e no popular como hortelã-rasteira, hortelã-de-panela ou menta-vilosa.Tem grande importância na ação contra microrganismos, especialmente, os intestinais. Apresenta efeito em ações espamolíticas (para dores e cólicas), antivomitiva e carminativa (alivia gases e cólicas), estomáquica (favorece digestão gástrica) e anti-helmíntica (contra parasitas e vermes). Assim, a utilização do hortelã pode ser parte do tratamento da ansiedade, especialmente por sua ação calmante e no tratamento de distúrbios no sistema gastrintestinal por sua ação digestiva.</p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/memBs2FKRr4">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">MANJERICÃO</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/manjericao.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>O manjericão é considerado uma planta anual ou perene, comercialmente cultivada para fins medicinais com indicações antiespasmódica, sedativa e, recentemente, há estudos que demonstram que o extrato aquoso e o extrato etanólico possuem substâncias como apigenina, linalol e ácido ursólico, compostos que apresentam forte atividade contra o vírus da hepatite B e o da herpes. Além disso, o manjericão possui diversasa indicações farmacológicas e, entre elas, a carminativa, galactógenica, antisséptica intestinal, diurética, anti-helmíntica e  antimicrobiana.</p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/nWkUee8tOSQ">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">MORANGO</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/morangos.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Entre todas as espécies que são consideradas medicinais, a Erva cidreira (Melissa Officinalis L.) se destaca. É uma planta aromática com ramos de 30 cm a 60 cm de altura. Possui  folhas rugosas de 3 cm a 6 cm de comprimento, de cor verde escuras na parte superior e verde claro na inferior. As suas folhas podem ser utilizadas na forma de chá, de preferência com a planta fresca, como calmante nos casos de ansiedade e insônia, e como medicação contra dispepsia (má digestão), gripe, bronquite crônica, cefaleias, enxaqueca, dores reumáticas, para normalizar as funções gastrointestinais e no tratamento de manifestações virais.  A infusão pode ser feita com uma colher se sobremesa de erva cidreira, sendo as folhas e ramos frescos ou secos bem picados. Recomenda-se também como banho relaxante de imersão durante 15 minutos, preparado pela adição de meio litro de água fervente sobre 15 colheres de sopa de erva cidreira. A melissa torna-se, assim, um dos fitoterápicos mais utilizados no tratamento da ansiedade, especialmente por sua palatabilidade e alta aceitação sensorial. Ainda, pode melhorar as crises de dores de cabeças e também insônia, sintomas comum em indivíduos que sofrem de ansiedade.</p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/W5fFWESog7U">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">RABANETE</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/rabanete.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Pesquisas revelaram as muitas propriedades do rabanete para a saúde. Por exemplo, metilisogermabulona, um composto bioativo isolado de rabanete, foi encontrado para estimular a mobilidade do intestino delgado ativando os receptores acetilcolinérgicos. Além disso, o sabor picante do rabanete é devido a certas substâncias químicas (por exemplo, mirosinase, glucosinolato e isotiocianato) feitas por esta planta, alguns dos quais foram sugeridos como tendo atividades anticâncer. Além disso, o rabanete contém antioxidantes potentes que foram considerados favoráveis para melhorar as condições diabéticas.</p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/-QxEGoY4Bvo">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">RÚCULA</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/rucula.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Os benefícios medicinais proporcionados pela rúcula, auxilia no tratamento de doenças pulmonares, falta de apetite, gases intestinais, anemias, além de participar diretamente no processo de desintoxicação do organismo devido a presença de ômega 3, ácido graxo que tem a capacidade de desobstruir as artérias, o que proporciona uma melhor circulação sanguínea.
                          É indicada como fitoterápico e utilizada no tratamento de gengivites, além da sua composição química rica em vitaminas, sais minerais e fibras, presença de cálcio, compostos sulfurados, enxofre, ferro, fósforo e potássio.
                          </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">SALSA</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/salsa.png') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>É rica em ferro e em vitaminas A e C que fortalecem o sistema imunológico. Protege as células do envelhecimento e ainda ajuda no sistema urinário. Ainda possui a capacidade de proteger o fígado e os intestinos de diferentes tipos de câncer, suas propriedades anticancerígenas encontram-se em um dos seus componentes conhecido como Miristicina.
                          </p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/p3zAGnoj9aU">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7">
            <h3 style="text-align: center" class="header">TOMATE</h3>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{ asset('image/tomate.jpg') }}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>As principais fontes de licopeno na dieta humana são o fruto do tomate e seus derivados. Devido à sua estrutura química, o licopeno é um dos melhores supressores biológicos de radicais livres e mostrou-se como um dos antioxidantes mais eficientes. Diferentes estudos têm associado dietas ricas em licopeno à redução do risco de desenvolvimento de câncer de próstata e ovário, bem como a uma menor incidência de doenças degenerativas crônicas e cardiovasculares.
                          </p>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="https://youtu.be/3h20iczoI98">Link YouTube</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
