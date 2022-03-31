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
    <nav style="background-color: #2196F3">
        <div class="container">
            <div class="nav-wrapper ">
                <a href="#" class="brand-logo"> HORTAS</a>
                <ul class="right">

                    {{-- <li>
                        <a href="{{route('welcome')}}">Página Inicial</a>
                    </li> --}}
                    {{-- <li>
                        <a href="{{route('admin.escolas.index')}}">Escolas</a>
                    </li> --}}
                    <li class="relative flex items-top justify-center  sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                            <li class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ route('admin.hortas.index') }}" class="text-sm  underline">Administrativo</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm  underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm  underline">Register</a>
                                    @endif
                                @endauth
                            </li>
                        @endif


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
