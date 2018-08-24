@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Formulario para modificar Quienes Somos</div>

                    <div class="card-body">
                        @foreach($data as $dat)
                            {!! Form::model($dat, ['url' => ['Admin/QuienesSomos',$dat->id_about], 'method'=>'PUT','files'=>true]) !!}

                            @include('Admin.QuienesSomos.partials.form')

                            {!! Form::close() !!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection