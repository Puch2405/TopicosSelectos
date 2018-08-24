@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Inicio</div>

                    <div class="card-body">
                        <div class="row">
                            <a href="{{ URL::to('Admin/Inicio/create') }}" class="btn btn-success col-md-2 offset-9">Añadir Inicio</a>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id_inicio</th>
                                        <th>Descripcion</th>
                                        <th>Actualizar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            @foreach($begins as $be)
                                            <td>{{$be->id_begin}}</td>
                                            <td>{{$be->descripcion}}</td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
