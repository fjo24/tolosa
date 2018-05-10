<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        return view('home');
    }
    public function create()
    {
       $home = Home::all()->first();
        return redirect()->route('home.edit', $home->id); 
    } 
    public function edit($id)
    {
        $home = Home::find($id);
        return view('adm.home.edit')
            ->with('home',$home);
    }

    public function update(Request $request, $id)
    {
        $dato=Home::find($id);
        $dato->titulo=$request->titulo;
        $dato->subtitulo=$request->subtitulo;
        $dato->contenido=$request->contenido;
        $dato->contenido2=$request->contenido2;
        $dato->link=$request->link;
        $dato->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('home.index');
    }
/*
    public function destroy($id)
    {
       
    }*/
}
