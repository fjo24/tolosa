<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Producto;
use App\Imgproducto;
use App\Categoria;
use Laracasts\Flash\Flash;

class ProductoController extends Controller
{

    public function index()
    {
        $productos  = producto::orderBy('categoria_id','ASC')->get();
        return view('adm.productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::orderBy('nombre', 'ASC')->pluck('nombre', 'id')->all();
       
        return view('adm.productos.create', compact('categorias'));
    }

    public function store(ProductoRequest $request)
    {


          //  dd($extra);
        
        
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->orden = $request->orden;
        $producto->texto_principal = $request->texto_principal;
        $producto->titulo1 = $request->titulo1;
        $producto->contenido1 = $request->contenido1;
        $producto->titulo2 = $request->titulo2;
        $producto->contenido2 = $request->contenido2;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();
        $id = Producto::all()->max('id');
        

        if ($request->HasFile('file')){
            foreach($request->file as $file){
                $filename = $file->getClientOriginalName();
                $path = public_path('img/producto/');
                $file->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen = new Imgproducto;
                $imagen->ubicacion='img/producto/' . $id.'_'.$file->getClientOriginalName();
                $imagen->producto_id = $id;
                $imagen->save();
            }

        }
        Flash::success("Se ha registrado el producto ".$producto->nombre." de manera exitosa!")->important();
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
        $producto->texto_principal = $request->texto_principal;
        $producto->titulo1 = $request->titulo1;
        $producto->contenido1 = $request->contenido1;
        $producto->titulo2 = $request->titulo2;
        $producto->contenido2 = $request->contenido2;
        $producto->categoria_id = $request->categoria_id;
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

//admin de imagenes
    public function imagen($id)
    {
        $imagenes = Imgproducto::orderBy('id', 'ASC')->Where('producto_id', $id)->get();

        $producto=producto::find($id);
        return view('adm.productos.imagenes')->with(compact('imagenes', 'producto'));
    }

    public function nuevaimagen(Request $request, $id)
    {
        if ($request->HasFile('file')){
            foreach($request->file as $file){
                $filename = $file->getClientOriginalName();
                $path = public_path('img/producto/');
                $file->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen = new Imgproducto;
                $imagen->ubicacion='img/producto/' . $id.'_'.$file->getClientOriginalName();
                $imagen->producto_id = $id;
                $imagen->save();
            }

        }
        $imagenes = Imgproducto::orderBy('id', 'ASC')->Where('producto_id', $id)->get();

        $producto=producto::find($id);
        return view('adm.productos.imagenes')->with(compact('imagenes', 'producto'));
    }
    
    public function destroyimg($id)
    {
        $imagen = Imgproducto::find($id);
        $idpro=$imagen->producto_id;
        $imagen ->delete();
        $imagenes = Imgproducto::orderBy('id', 'ASC')->Where('producto_id', $idpro)->get();

        $producto=producto::find($idpro);
        return view('adm.productos.imagenes')->with(compact('imagenes', 'producto'));
    }

}