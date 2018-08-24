@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Formulario para Actualizar Inicio</div>

                    <div class="card-body">
                        @foreach($data as $dat)
                            {!! Form::model($dat, ['url' => ['Admin/Inicio',$dat->id_begin], 'method'=>'PUT','files'=>true]) !!}

                            @include('Admin.Inicio.partials.form')

                            {!! Form::close() !!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection