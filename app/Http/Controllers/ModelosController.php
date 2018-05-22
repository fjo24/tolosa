<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModeloRequest;
use App\Modelo;
use App\Producto;

class ModelosController extends Controller
{
    public function index()
    {
        $modelos  = modelo::orderBy('id','ASC')->get();
        return view('adm.modelos.index', compact('modelos'));
    }

    public function create()
    {
        $productos = Producto::orderBy('nombre', 'ASC')->pluck('nombre', 'id')->all();
        return view('adm.modelos.create', compact('productos'));
    }

    public function store(ModeloRequest $request)
    {
        $modelo = new Modelo();
        $modelo->nombre = $request->nombre;
        $modelo->orden = $request->orden;
        $modelo->texto = $request->texto;
        $modelo->producto_id = $request->producto_id;
        /*$id = Modelo::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/producto/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $producto->imagen = 'img/producto/' . $id.'_'.$file->getClientOriginalName();
            }
        }*/
        $producto->save();
        Flash::success("Se ha registrado la producto de manera exitosa!")->important();        
        return redirect()->route('modelos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $productos = Producto::orderBy('nombre', 'ASC')->pluck('nombre', 'id')->all();
        $modelo = Modelo::find($id);
        return view('adm.modelos.edit', compact('modelo', 'productos'));
    }

    public function update(ModeloRequest $request, $id)
    {
        $modelo = Modelo::find($id);
        $modelo->nombre = $request->nombre;
        $modelo->orden = $request->orden;
        $modelo->texto = $request->texto;
        $modelo->producto_id = $request->producto_id;

        $producto->save();
        Flash::success("Se ha registrado la producto de manera exitosa!")->important();        
        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        $modelo= modelo::find($id);
        $modelo -> delete();
        //flash('Se ha eliminado correctamente.')->success()->important();
        return redirect()->route('modelos.index');
    }
}
