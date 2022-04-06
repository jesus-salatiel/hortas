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
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">

    @yield('style_card')

    <title>@yield('title')</title>
</head>
<body>

    {{--Menu Topo--}}
    <nav style="background-color: #2196F3;">
        <div class="container">
            <div class="nav-wrapper ">
                <!-- Ícone para abrir no Mobile -->
                <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="left">

                    <li>
                        <a class="dropdown-trigger" data-target="dropdown-menu" href="#">
                            Menu <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
                 <!-- Dropdown -->
                 <ul id="dropdown-menu" class="dropdown-content">
                    <li><a href="#">Telefone</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Redes sociais</a></li>
                </ul>


                <ul class="right">
                    <li>
                        <a href="{{route('info')}}">Informações</a>
                    </li>
                    <li class="relative flex items-top justify-center  sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                            {{-- < class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                                @auth
                                    <a href="{{ route('admin.hortas.index') }}" class="text-sm  underline">Administrativo</a>
                                    <li>
                                    @if (auth()->id())
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit(); " role="button">
                                               
                                                {{ __('Sair') }}
                                            </a>

                                    </form>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}" role="button">
                                            <i class="fas fa-sign-in-alt"></i>
                                            Login
                                        </a>
                                    </li>
                                @endif
                                    </li>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm  underline">Entrar</a>

                                    {{-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm  underline">Register</a>
                                    @endif --}}

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

        //MATERIAL BOX
        var boxes = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(boxes);

        });

        // Navbar
        const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
        const instancesDropdown = M.Dropdown.init(elemsDropdown, {
            coverTrigger: false
        });
        const elemsSidenav = document.querySelectorAll(".sidenav");
        const instancesSidenav = M.Sidenav.init(elemsSidenav, {
            edge: "left"
        });


        // $(document).ready(function(){
        // $('select').formSelect();
        // });


    </script>

</body>
</html>
