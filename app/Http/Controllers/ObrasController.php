<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ObrasRequest;
use App\Obra;
use Laracasts\Flash\Flash;

class ObrasController extends Controller
{
    public function index(Request $request)
    {
        $obras  = obra::orderBy('id','ASC')->get();
    	return view('adm.obras.index', compact ('obras'));
    }

    public function create()
    {
        return view('adm.obras.create');
    }

    public function store(ObrasRequest $request)
    {
    	$obra = new Obra();
        $obra->titulo = $request->titulo;
        $obra->orden = $request->orden;
        $obra->descripcion = $request->descripcion;
        $id = obra::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/obras/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $obra->imagen = 'img/obras/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $obra->save();
        Flash::success("Se ha editado la obra de manera exitosa!")->important();        
        return redirect()->route('obras.index');
    }

    public function edit($id)
    {
        $obra = Obra::find($id);
        return view('adm.obras.edit', compact('obra'));
    }

    public function update(ObrasRequest $request, $id)
    {
        $obra = Obra::find($id);
        $obra->titulo = $request->titulo;
        $obra->orden = $request->orden;
        $obra->descripcion = $request->descripcion;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/obras/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $obra->imagen = 'img/obras/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $obra->save();
        Flash::success("Se ha editado la obra de manera exitosa!")->important();        
        return redirect()->route('obras.index');
    }

}
