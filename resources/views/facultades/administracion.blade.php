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
        <a class="navbar-brand" href="{{ url('/') }}">INICIO</a>
        
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
                        Alumnos de la facultad de Administración
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
                                        <th>Deuda al Feunas</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Names</th>
                                        <th>Last Names</th>
                                        <th>Code</th>
                                        <th>Profetional School</th>
                                        <th>University</th>
                                        <th>Debt to Feunas</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                    @foreach($usuarios as $users)
                                    <tr>
                                        <td> {{ $users->name }} </td>
                                        <td> {{ $users->last_name }} </td>
                                        <td> {{ $users->code }} </td>
                                        <td> {{ $users->faculty }} </td>
                                        <td> UNAS </td>
                                        <td> {{ $users->debt }}</td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                                                Actualizar
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody> 
                            </table>
                        </div>      
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR DEUDA</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        
                            <div class="modal-body">

                                <form action="../facultades/administracion/edit" method="post" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    {{-- {​​​​{​​​​ method_field('PATCH') }​​​​}​​​​ --}}
                                    {{ method_field('PATH') }}
                                    {{-- {​​​​{​​​​ method_field('POST') }​​​​}​​​​ --}}
                                    {{ method_field('POST') }}
                                            <input type="text" name="deuda"  value="{{ $users->debt }}">
                                    <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" name="id_user" value="{{ auth()->user()->id }} " class="btn btn-primary">Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

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

</body>    
</html>


