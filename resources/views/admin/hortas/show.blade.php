@extends('admin.layouts.main')

@section('title', 'visualizar')

@section('content')

<section class="section">

    <div class="row">
        <span class="col s12">
            <h5>Cidade</h5>
            <p>{{$imovel->cidade->nome}}</p>
        </span>
    </div>

   

</section>






@endsection
