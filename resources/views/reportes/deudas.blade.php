
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FEUNAS | Reporte</title>

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
            <a class="navbar-brand" href="{{ url('/home') }}">FEUNAS WEB SYSTEM</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
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

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid" style="background-color:#d0ddeb">
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Reporte de deuda acumulada de {{ auth()->user()->name }}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>Codigo</th>
                                                <th>Escuela Profesional</th>
                                                <th>Universidad</th>
                                                <th>Año de Ingreso</th>
                                                <th>Deuda al Feunas</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Names</th>
                                                <th>Last Names</th>
                                                <th>Code</th>
                                                <th>Profetional School</th>
                                                <th>University</th>
                                                <th>Start date</th>
                                                <th>Debt to Feunas</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td> {{ auth()->user()->name }} </td>
                                                <td> {{ auth()->user()->last_name }} </td>
                                                <td> {{ auth()->user()->code }} </td>
                                                <td> {{ auth()->user()->faculty }} </td>
                                                <td> UNAS </td>
                                                <td> 2017 </td>
                                                <td>$ 0.00</td>
                                            </tr>
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