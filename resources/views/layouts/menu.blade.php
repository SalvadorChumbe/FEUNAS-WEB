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

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Feunas Web
                </div>

            </nav>
            
        </div>
    </div>  
    
</body>
</html>  