@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Inicio</div>

                    <div class="card-body">
                        <div class="row">
                            <a href="{{ URL::to('Admin/Donativos/create') }}" class="btn btn-success col-md-2 offset-9">Añadir Donativo</a>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id_donativo</th>
                                        <th>Descripcion</th>
                                        <th>Archivo</th>
                                        <th>Actualizar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                        @foreach($begins as $be)
                                            <tr>
                                                <td>{{$be->id_donation}}</td>
                                                <td>{{$be->descripcion}}</td>
                                                <td>{{$be->archivo}}</td>
                                                <td><a href="{{ URL::to('Admin/Donativos/'.$be->id_donation).'/'.'edit' }}" class="btn btn-warning">Editar</a></td>
                                                <td>
                                                    {!! Form::open(['url' => ['Admin/Donativos',$be->id_donation] , 'method' => 'DELETE']) !!}
                                                    <button href="#!" class="btn btn-danger">Eliminar</button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach

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