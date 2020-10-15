
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FEUNAS-WEB</title>

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
                                    <a class="nav-link" href="layout-sidenav-light.html">Lista de Actividades</a>
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
                                    <a class="nav-link" href="layout-static.html">Deudas</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Actividades no asistidas</a>
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
                            <a class="nav-link" href="Facultades/administracion">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Administración
                        </a>

                        <a class="nav-link" href="Facultades/agronomia">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Agronomía
                        </a>

                        <a class="nav-link" href="Facultades/ambiental">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Ambiental
                        </a>

                        <a class="nav-link" href="Facultades/suelos">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Conservación de Suelos y Aguas
                        </a>

                        <a class="nav-link" href="Facultades/contabilidad">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Contabilidad
                        </a>

                        <a class="nav-link" href="Facultades/economia">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Economía
                        </a>

                        <a class="nav-link" href="Facultades/forestal">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Forestal
                        </a>

                        <a class="nav-link" href="Facultades/industrias">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Industrias Alimentarias
                        </a>

                        <a class="nav-link" href="Facultades/sistemas">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Informática y Sistemas
                        </a>

                        <a class="nav-link" href="Facultades/mecanica">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Mecánica Eléctrica
                        </a>

                        <a class="nav-link" href="Facultades/recursos">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Recursos Naturales R.
                        </a>

                        <a class="nav-link" href="Facultades/zootecnia">
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
                    <div class="container-fluid" style="background-color:#d0ddeb">
                        <h1 class="mt-0" align="center">¡¡ PAGINA DE LA FEDERACION DE ESTUDIANTES UNASINOS !!</h1>
                        <ol class="breadcrumb mb-4" style="background-color:#66e49b">
                            <font face="Comic Sans MS,arial,verdana">Bienvenido al sitio web de la FEUNAS...</font>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombres y Apellidos</th>
                                                <th>Escuela Profesional</th>
                                                <th>Universidad</th>
                                                <th>Edad</th>
                                                <th>Año de Ingreso</th>
                                                <th>Deuda al Feunas</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Names and Last names</th>
                                                <th>Profetional School</th>
                                                <th>University</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Debt to Feunas</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                        </tbody>
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


           
