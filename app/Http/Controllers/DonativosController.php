<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonativosController extends Controller
{
    public function index()
    {
        return view('Donativos/index');
    }
}
