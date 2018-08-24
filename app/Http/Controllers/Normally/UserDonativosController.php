<?php

namespace App\Http\Controllers\Normally;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserDonativosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Normally/Donativos/index');
    }
}
