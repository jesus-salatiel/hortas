<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    {{--CSS Galeria Fotos--}}
    <link rel="stylesheet" href="{{asset('css/fotos.css')}}">

    @yield('style_card')

    <title>@yield('title')</title>
</head>
<body>

    {{--Menu Topo--}}
    <nav style="background-color: #0d6efd">
        <div class="container">
            <div class="nav-wrapper ">
                <a  href="{{ url()->previous() }}">Voltar
                </a>
                {{-- <a href="#" class="brand-logo"> HORTA EDUCATIVA </a> --}}
                <ul class="right">
                    <li>
                        <a href="{{route('admin.welcomes.index')}}" >Descriação Inicial</a>
                    </li>
                    <li>
                        <a href="{{route('admin.hortas.index')}}" >Hortas</a>
                    </li>
                    <li>
                        <a href="{{route('admin.downloads.index')}}" >Apostilas</a>
                    </li>
                    <li>
                        <a href="{{route('galeria.index')}}" >Página Inicial</a>
                    </li>
                    <li>
                    @if (auth()->id())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                                <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit(); " role="button">

                                    {{ __('Sair') }}
                                </a>

                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('login') }}" role="button">
                                <i class="fas fa-sign-in-alt"></i>
                                Login
                            </a>
                        </li>
                    @endif
                    </li>

                    {{-- <li>
                        <a href="{{route('admin.escolas.index')}}">Escolas</a>
                    </li> --}}

                </ul>

            </div>

        </div>

    </nav>

    {{-- Conteudo Principal --}}
    <div class="container">
        @yield('content')
    </div>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
{{-- compiled js materialize --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script> --}}

{{--mensagem de inserção com sucesso--}}

    <script>

        @if (session('sucesso'))
            M.toast({html:"{{session('sucesso')}}"});
        @endif

        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        M.Modal.init(elems);
        });



        // $(document).ready(function(){
        // $('select').formSelect();
        // });

    </script>

</body>
</html>
