<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Donation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AdminDonativosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $begins = DB::table('donations')
            ->select(DB::raw('id_donation,descripcion,archivo'))
            ->get();
        return view('Admin/Donativos/index',compact('begins'));
    }

    public function create(){
        return view('Admin/Donativos/created');
    }

    public function store(request $request) {
        $path = Storage::disk('public')
            ->put('Photos',$request->file('ar'));
        $post = Donation::create([
            'descripcion'=>$request['descripcion'],
            'archivo'=>$path
        ]);
        return redirect('Admin/Donativos')
            ->with('info','Registro exitoso');
    }
    /*public function show($id)
    {
        dd($id);
    }*/
    public function edit($id)
    {
        $data = DB::table('donations')
            ->select(DB::raw('id_donation,descripcion,archivo as ar'))
            ->where(['id_donation'=>$id])
            ->get();
        return view('Admin/Donativos/update', compact('data'));
    }

    public function update(request $request,$id)
    {
        $path = Storage::disk('public')
            ->put('Photos',$request->file('ar'));
        $post = DB::table('donations')
            ->where('id_donation',$id)
            ->update(['descripcion'=>$request->descripcion,'archivo'=>$path]);
        return redirect('Admin/Donativos')
            ->with('info','Registro actualizado con exito');
    }

    public function destroy($id)
    {
        DB::table('donations')
            ->where('id_donation',$id)->delete();
        return redirect('Admin/Donativos')
            ->with('info','Registro eliminado con exito');
    }
}
