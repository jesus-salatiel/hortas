
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


