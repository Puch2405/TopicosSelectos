@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Formulario para Agregar Quienes Somos</div>

                    <div class="card-body">
                        {!! Form::open(['url' => 'Admin/QuienesSomos','files'=>true]) !!}

                        @include('Admin.QuienesSomos.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection