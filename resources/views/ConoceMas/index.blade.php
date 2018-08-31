@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Conoce Mas</h1>

        <div class="boxesContainer">
            @foreach($informacion as $info)
                <div class="cardBox">
                    <div class="card2">
                        <div class="front">
                            <h3>{{$info->titulo}}</h3>
                            <p></p>
                            <strong>&#x21bb;</strong>
                        </div>
                        <div class="back">
                            <h3></h3>
                            <img src="{{asset($info->archivo)}}" width="220" alt="">
                            <p><h6>{{$info->descripcion}}</h6> </p>

                        </div>
                    </div>
                </div>

            @endforeach

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card2">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection