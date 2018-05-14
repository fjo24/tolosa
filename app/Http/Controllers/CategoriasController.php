<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Laracasts\Flash\Flash;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias  = categoria::orderBy('orden','ASC')->get();
        return view('adm.categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('adm.categorias.create');
    }

    public function store(Request $request)
    {
        
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->orden = $request->orden;
        $id = Categoria::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/categoria/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $categoria->imagen = 'img/categoria/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $categoria->save();
        Flash::success("Se ha registrado la categoria de manera exitosa!")->important();        
        return redirect()->route('categorias.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('adm.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria=Categoria::find($id);
        $id = Categoria::all()->max('id');
        $categoria->nombre = $request->nombre;
        $categoria->orden = $request->orden;
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/categoria/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $categoria->imagen = 'img/categoria/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $categoria->save();
        Flash::success("Se ha registrado la categoria de manera exitosa!")->important();        
        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        $categoria= categoria::find($id);
        $categoria -> delete();
        //flash('Se ha eliminado correctamente.')->success()->important();
        return redirect()->route('categorias.index');
    }
}
