<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipoventana;
use App\Imgtipo;
use Laracasts\Flash\Flash;

class TiposventanaController extends Controller
{
    public function index(Request $request)
    {
        $tipos  = tipoventana::orderBy('id','ASC')->get();
    	return view('adm.tiposventana.index', compact ('tipos'));
    }

    public function create()
    {
        return view('adm.tiposventana.create');
    }

    public function store(Request $request)
    {
    	$tipo = new Tipoventana();
        $tipo->nombre = $request->nombre;
        $tipo->info = $request->info;
        $tipo->orden = $request->orden;
        $tipo->save();
        $id = $tipo->id;
   
        if ($request->HasFile('file')){
            foreach($request->file as $file){
                $filename = $file->getClientOriginalName();
                $path = public_path('img/tiposventana/');
                $file->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen = new Imgtipo;
                $imagen->ubicacion='img/tiposventana/' . $id.'_'.$file->getClientOriginalName();
                $imagen->tipos_ventana_id = $id;
                $imagen->save();
            }
        }
        Flash::success("Se ha editado la obra de manera exitosa!")->important();        
        return redirect()->route('tiposventana.index');
    }

    public function edit($id)
    {
        $tipo = Tipoventana::find($id);
        $imagen = Imgtipo::Where('tipos_ventana_id', $id)->first();
        return view('adm.tiposventana.edit', compact('tipo', 'imagen'));
    }

    public function update(Request $request, $id)
    {
        $tipo = Tipoventana::find($id);
        $tipo->nombre = $request->nombre;
        $tipo->info = $request->info;
        $tipo->orden = $request->orden;
        $tipo->save();
        $id = $tipo->id;
   
        if ($request->HasFile('file')){
            foreach($request->file as $file){
                $filename = $file->getClientOriginalName();
                $path = public_path('img/tiposventana/');
                $file->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen = new Imgtipo;
                $imagen->ubicacion='img/tiposventana/' . $id.'_'.$file->getClientOriginalName();
                $imagen->tipos_ventana_id = $id;
                $imagen->save();
            }
        }
        Flash::success("Se ha editado la obra de manera exitosa!")->important();        
        return redirect()->route('tiposventana.index');
    }
}
