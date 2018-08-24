@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Formulario para Actualizar Donativos</div>

                    <div class="card-body">
                        @foreach($data as $dat)
                            {!! Form::model($dat, ['url' => ['Admin/Donativos',$dat->id_donation], 'method'=>'PUT','files'=>true]) !!}

                            @include('Admin.Donativos.partials.form')

                            {!! Form::close() !!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection