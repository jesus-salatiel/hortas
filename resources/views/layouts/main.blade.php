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
    {{-- <link rel="stylesheet" href="{{asset('css/fotos.css')}}"> --}}


    <title>@yield('title')</title>
</head>
<body>

    {{--Menu Topo--}}
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">HORTA EDUCATIVA</a>
                <ul class="right">
                    <li>
                        <a href="{{route('admin.hortas.index')}}">Hortas</a>
                    </li>
                    <li>
                        <a href="{{route('admin.escolas.index')}}">Escolas</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.fotos.index')}}">Fotos</a>
                    </li>

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

{{--mensagem de inserção com sucesso--}}

    <script>

        @if (session('sucesso'))
            M.toast({html:"{{session('sucesso')}}"});
        @endif

        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
        });

        // $(document).ready(function(){
        // $('select').formSelect();
        // });

    </script>

</body>
</html>
