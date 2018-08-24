@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Formulario</div>

                    <div class="card-body">
                        {!! Form::open(['url' => 'Admin/Inicio']) !!}

                        @include('Admin.Inicio.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection