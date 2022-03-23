@extends('admin.layouts.main')

@section('title', 'visualizar')

@section('content')

<section class="section">

    <div class="row">
        <span class="col s12">
            <h5>Escola</h5>
            <p>{{$horta->escola->nome}}</p>
        </span>
    </div>



</section>






@endsection
