<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Begin;
use Illuminate\Support\Facades\DB;

class AdminInicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $begins = DB::table('begins')
            ->select(DB::raw('id_begin,descripcion'))
            ->get();
        return view('Admin/Inicio/index',compact('begins'));
    }

    public function create(){
        return view('Admin/Inicio/created');
    }

    public function store(request $request) {
        $post = Begin::create([
            'descripcion'=>$request['descripcion']
        ]);
        return redirect('Admin/Inicio')
            ->with('info','Registro exitoso');
    }
    /*public function show($id)
    {
        dd($id);
    }*/
    public function edit($id)
    {
        $data = DB::table('begins')
            ->select(DB::raw('id_begin,descripcion'))
            ->where(['id_begin'=>$id])
            ->get();
        return view('Admin/Inicio/update', compact('data'));
    }

    public function update(request $request,$id)
    {
        $post = DB::table('begins')
            ->where('id_begin',$id)
            ->update(['descripcion'=>$request->descripcion]);
        return redirect('Admin/Inicio')
            ->with('info','Registro actualizado con exito');
    }

    public function destroy($id)
    {
        DB::table('begins')
            ->where('id_begin',$id)->delete();
        return redirect('Admin/Inicio')
            ->with('info','Registro eliminado con exito');
    }
}
