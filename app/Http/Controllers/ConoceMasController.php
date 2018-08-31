<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;

class ConoceMasController extends Controller
{
    public function index()
    {
        $informacion=About::all();
        return view('ConoceMas/index',compact('informacion'));
    }
}
