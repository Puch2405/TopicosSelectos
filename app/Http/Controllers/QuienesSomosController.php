<?php

namespace App\Http\Controllers;

use App\About;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    public function index()
    {
        //$prueba=\DB::table('abouts')->select('descripcion','archivo')->get();
        $prueba="Somos una Fundación sin fines de lucro, de derecho privado, con personería jurídica, aprobada mediante Acuerdo N.- 029-2012 del Ministerio de Agricultura, Ganadería, Acuacultura y Pesca el 25 de junio del 2012, que nació en la ciudad de Valle de Bravo con el objetivo de luchar por el bienestar de los animales y fomentar una cultura de tolerancia y respeto hacia ellos.";
        return view('QuienesSomos/index', compact('prueba'));
    }
}
