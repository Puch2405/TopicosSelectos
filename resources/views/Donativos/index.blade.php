@extends('layouts.app')

@section('content')
    <div class="container gira">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">Donativos</div>
                    <div class="row justify-content-center">
                        <div class="card-body col-md-8">
                            Todos los donativos son usados de manera transparente, proporcionando la información al donante, estos en su mayoría son destinados para esterilizaciones en comunidades donde la gente no puede costearlo, tu puedes ser parte de este proyecto con tu donativo, siendo padrino de alguno de estos animales o de los que tengamos a cargo
                        </div>
                        <div class="card-body col-md-4">
                            <img src="{{asset('donativos.png')}}"  width="200" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <h1>Medios de Donacion</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <img src="{{asset('BBVA.png')}}" width="200" alt="">
                        </div>
                        <div class="col-md-3">
                            LIGA VALLESANA PARA EL DERECHO DE LOS ANIMALES, AC
                            CUENTA: 0660 8964 99
                            CLABE: 0724 5700 6608 9646 99
                            CONCEPTO: DONATIVO
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('oxxo.svg')}}" width="100" alt="">
                            <br>
                            NO. TARJETA: 4189 2810 4299 8006
                        </div>
                        <div class="col-md-3">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_self">
                                <input type="hidden" name="cmd" value="_donations">
                                <input type="hidden" name="business" value="livavalledebravo@hotmail.com">
                                <input type="hidden" name="lc" value="MX">
                                <input type="hidden" name="item_name" value="ORGANIZACIONLIVA">
                                <input type="hidden" name="no_note" value="0">
                                <input type="hidden" name="currency_code" value="MXN">
                                <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                                <input type="image" src="https://www.paypalobjects.com/webstatic/es_MX/mktg/logos-buttons/redesign/btn_4.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">

                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection