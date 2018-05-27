<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModeloRequest;
use App\Imgmodelo;
use App\Modelo;
use App\Producto;
use Laracasts\Flash\Flash;
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
        $modelo->save();
        $id = Modelo::all()->max('id');
        if ($request->HasFile('file')){
            foreach($request->file as $file){
                $filename = $file->getClientOriginalName();
                $path = public_path('img/modelo/');
                $file->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen = new Imgmodelo;
                $imagen->ubicacion='img/modelo/' . $id.'_'.$file->getClientOriginalName();
                $imagen->modelo_id = $id;
                $imagen->save();
            }

        }
        Flash::success("Se ha registrado el modelo de manera exitosa!")->important();        
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

        $modelo->save();
        Flash::success("Se ha registrado el modelo de manera exitosa!")->important();        
        return redirect()->route('modelos.index');
    }

    public function destroy($id)
    {
        $modelo= modelo::find($id);
        $modelo -> delete();
        //flash('Se ha eliminado correctamente.')->success()->important();
        return redirect()->route('modelos.index');
    }

    public function imagenes($id)
    {
        $imagenes = Imgmodelo::orderBy('id', 'ASC')->Where('modelo_id', $id)->get();

        $modelo=modelo::find($id);
        return view('adm.modelos.imagenes')->with(compact('imagenes', 'modelo'));
    }

    public function nuevaimagen(Request $request, $id)
    {
        if ($request->HasFile('file')){
            foreach($request->file as $file){
                $filename = $file->getClientOriginalName();
                $path = public_path('img/modelo/');
                $file->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen = new Imgmodelo;
                $imagen->ubicacion='img/modelo/' . $id.'_'.$file->getClientOriginalName();
                $imagen->modelo_id = $id;
                $imagen->save();
            }

        }
        $imagenes = Imgmodelo::orderBy('id', 'ASC')->Where('modelo_id', $id)->get();

        $modelo=modelo::find($id);
        return view('adm.modelos.imagenes')->with(compact('imagenes', 'modelo'));
    }

    public function destroyimg($id)
    {
        $imagen = Imgmodelo::find($id);
        $idmod=$imagen->modelo_id;
        $imagen ->delete();
        $imagenes = Imgmodelo::orderBy('id', 'ASC')->Where('modelo_id', $idmod)->get();

        $modelo=modelo::find($idmod);
        return view('adm.modelos.imagenes')->with(compact('imagenes', 'modelo'));
    }
}
