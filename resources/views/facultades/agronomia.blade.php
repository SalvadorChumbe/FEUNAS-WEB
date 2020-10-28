@extends('layouts.app')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid" style="background-color:#d0ddeb">
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Facultad de Agronomia
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
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td> {{ auth()->user()->name }} </td>
                                                <td> {{ auth()->user()->last_name }} </td>
                                                <td> {{ auth()->user()->code }} </td>
                                                <td> {{ auth()->user()->faculty }} </td>
                                                <td> UNAS </td>
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
@endsection