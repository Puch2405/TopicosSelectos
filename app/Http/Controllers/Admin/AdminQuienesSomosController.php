<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminQuienesSomosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $begins = DB::table('abouts')
            ->select(DB::raw('id_about,titulo,descripcion,archivo'))
            ->get();
        return view('Admin/QuienesSomos/index',compact('begins'));
    }

    public function create(){
        return view('Admin/QuienesSomos/created');
    }

    public function store(request $request) {
        $path = Storage::disk('public')
            ->put('Photos',$request->file('ar'));
        $post = About::create([
            'titulo'=>$request['titulo'],
            'descripcion'=>$request['descripcion'],
            'archivo'=>$path
        ]);
        return redirect('Admin/QuienesSomos')
            ->with('info','Registro exitoso');
    }
    /*public function show($id)
    {
        dd($id);
    }*/
    public function edit($id)
    {
        $data = DB::table('abouts')
            ->select(DB::raw('id_about,titulo,descripcion,archivo as ar'))
            ->where(['id_about'=>$id])
            ->get();
        return view('Admin/QuienesSomos/update', compact('data'));
    }

    public function update(request $request,$id)
    {
        $path = Storage::disk('public')
            ->put('Photos',$request->file('ar'));
        $post = DB::table('abouts')
            ->where('id_about',$id)
            ->update(['titulo'=>$request->titulo,'descripcion'=>$request->descripcion,'archivo'=>$path]);
        return redirect('Admin/QuienesSomos')
            ->with('info','Registro actualizado con exito');
    }

    public function destroy($id)
    {
        DB::table('abouts')
            ->where('id_about',$id)->delete();
        return redirect('Admin/QuienesSomos')
            ->with('info','Registro eliminado con exito');
    }
}
