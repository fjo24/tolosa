<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipovidrio;
use App\Imgvidrio;
use Laracasts\Flash\Flash;

class TiposvidrioController extends Controller
{
    public function index(Request $request)
    {
        $tipos  = Tipovidrio::orderBy('id','ASC')->get();
    	return view('adm.tiposvidrio.index', compact ('tipos'));
    }

    public function create()
    {
        return view('adm.tiposvidrio.create');
    }

    public function store(Request $request)
    {
    	$tipo = new Tipovidrio();
        $tipo->nombre = $request->nombre;
        $tipo->info = $request->info;
        $tipo->orden = $request->orden;
        $tipo->save();
        $id = $tipo->id;
   
        if ($request->HasFile('file')){
            foreach($request->file as $file){
                $filename = $file->getClientOriginalName();
                $path = public_path('img/tiposvidrio/');
                $file->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen = new Imgtipo;
                $imagen->ubicacion='img/tiposvidrio/' . $id.'_'.$file->getClientOriginalName();
                $imagen->vidrio_id = $id;
                $imagen->save();
            }
        }
        Flash::success("Se ha editado la obra de manera exitosa!")->important();        
        return redirect()->route('tiposvidrio.index');
    }

    public function edit($id)
    {
        $tipo = Tipovidrio::find($id);
        return view('adm.tiposvidrio.edit', compact('tipo'));
    }

    public function update(Request $request, $id)
    {
        $tipo = Tipovidrio::find($id);
        $tipo->nombre = $request->nombre;
        $tipo->info = $request->info;
        $tipo->orden = $request->orden;
        $tipo->save();
        Flash::success("Se ha editado la obra de manera exitosa!")->important();        
        return redirect()->route('tiposvidrio.index');
    }
}
