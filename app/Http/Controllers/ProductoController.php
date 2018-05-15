<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Producto;
use App\Categoria;
use Laracasts\Flash\Flash;

class ProductoController extends Controller
{

    public function index()
    {
        $productos  = producto::orderBy('id','ASC')->get();
        return view('adm.productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::orderBy('nombre', 'ASC')->pluck('nombre', 'id')->all();
       
        return view('adm.productos.create', compact('categorias'));
    }

    public function store(ProductoRequest $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->orden = $request->orden;
        $producto->contenido = $request->contenido;
        $producto->categoria_id = $request->categoria_id;
        $id = Producto::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/producto/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $producto->imagen = 'img/producto/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $producto->save();
        Flash::success("Se ha registrado la producto de manera exitosa!")->important();        
        return redirect()->route('productos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categorias = Categoria::orderBy('nombre', 'ASC')->pluck('nombre', 'id')->all();
        $producto = Producto::find($id);
        return view('adm.productos.edit', compact('producto', 'categorias'));
    }

    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->orden = $request->orden;
        $producto->contenido = $request->contenido;
        $producto->categoria_id = $request->categoria_id;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/producto/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $producto->imagen = 'img/producto/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $producto->save();
        Flash::success("Se ha registrado la producto de manera exitosa!")->important();        
        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        $producto= producto::find($id);
        $producto -> delete();
        //flash('Se ha eliminado correctamente.')->success()->important();
        return redirect()->route('productos.index');
    }
}
