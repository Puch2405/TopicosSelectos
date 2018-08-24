@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://www.dogalize.com/wp-content/uploads/2017/06/La-sverminazione-e-la-pulizia-del-cucciolo-del-cane-2-800x400-800x400.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://duko.cl/wp-content/uploads/2016/06/Fondo-tablet-perro-gato-1-800x400.jpg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                        </label>
                    </div>
                    <button type="button" class="btn btn-outline-info btn-circle btn-xl" style="bottom: -10% ;left: 15%"><i class="fa fa-check"></i>
                    </button>

                    <button type="button" class="btn btn-outline-info btn-circle btn-xl" style="bottom: -10% ;left: 45%"><i class="fa fa-check"></i>
                    </button>

                    <button type="button" class="btn btn-outline-info btn-circle btn-xl" style="bottom: -10% ;left: 75%"><i class="fa fa-check"></i>
                    </button>


                </div>
            </div>
        </div>

    </div>
@endsection
