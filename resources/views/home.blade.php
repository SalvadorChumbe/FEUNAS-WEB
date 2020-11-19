<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FEUNAS | HOME</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('scripts')

</head>

<body>

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <a class="navbar-brand" href="home">FEUNAS WEB SYSTEM</a>
        
        <a class="navbar-brand" href="{{ url('/') }}">
                INICIO
        </a>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                
                <div class="sb-sidenav-menu">

                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">ACTIVIDADES</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseActivities" aria-expanded="false" aria-controls="collapseActivities">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Cronograma
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseActivities" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="eventos/index">Calendario</a>
                                    <a class="nav-link" href="eventos/calendar">Lista de Actividades</a>
                                </nav>
                            </div>

                        <div class="sb-sidenav-menu-heading">ESTADO DE DEUDA</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reporte
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="reportes/deudas">Deudas</a>
                                    <a class="nav-link" href="reportes/inasistencias">Inasistencias</a>
                                </nav>
                            </div>

                        <div class="sb-sidenav-menu-heading">PAGINAS UNAS</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Paginas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="https://aulavirtual.unas.edu.pe" target="_blank">Aula virtual</a>
                                <a class="nav-link collapsed" href="https://academico.unas.edu.pe/login" target="_blank">DICDA</a>
                                <a class="nav-link collapsed" href="https://portal.unas.edu.pe/correo-institucional" target="_blank">Correo Institucional</a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">FACULTADES</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFacultades" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Lista de Facultades
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapseFacultades" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="../public/facultades/administracion">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Administración
                        </a>

                        <a class="nav-link" href="facultades/agronomia">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Agronomía
                        </a>

                        <a class="nav-link" href="facultades/ambiental">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Ambiental
                        </a>

                        <a class="nav-link" href="facultades/suelos">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Conservación de Suelos y Aguas
                        </a>

                        <a class="nav-link" href="facultades/contabilidad">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Contabilidad
                        </a>

                        <a class="nav-link" href="facultades/economia">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Economía
                        </a>

                        <a class="nav-link" href="facultades/forestal">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Forestal
                        </a>

                        <a class="nav-link" href="facultades/industrias">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Industrias Alimentarias
                        </a>

                        <a class="nav-link" href="facultades/sistemas">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Informática y Sistemas
                        </a>

                        <a class="nav-link" href="facultades/mecanica">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Mecánica Eléctrica
                        </a>

                        <a class="nav-link" href="facultades/recursos">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Recursos Naturales R.
                        </a>

                        <a class="nav-link" href="facultades/zootecnia">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Zootecnia
                        </a>
                            </nav>
                        </div>

                    </div>
                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Feunas Web
                </div>

            </nav>

        </div>

        <div id="layoutSidenav_content">

            <main>

                <div class="container-fluid" style="background-color:f8f8fa">

                    <ol class="breadcrumb mt-4 mb-4" style="background-color:#9bcf21">
                        <font face="Comic Sans MS,arial,verdana">{{ auth()->user()->name }} {{ auth()->user()->last_name }}, Bienvenido al sitio web de la Federacion de Estudiantes de la UNAS | FEUNAS</font>
                    </ol>
                    
                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Actividades pendientes mas próximas
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <div class = row>

                                        @foreach ($event as $evento)

                                            <div class="card border-success mb-4 ml-5" style="max-width: 18rem;">
                                                <div class="card-header">Pendiente</div>
                                                <div class="card-body text-success">
                                                    <h5 class="card-title">{{ $evento->title }}</h5>
                                                    <p class="card-text">{{ $evento->descripcion }}</p>
                                                </div>
                                            </div>

                                        @endforeach    

                                    </div>

                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

</body>
</html>


           
