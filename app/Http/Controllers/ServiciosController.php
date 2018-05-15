<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Http\Requests\ServicioRequest;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = servicio::orderBy('id','ASC')->get();
        return view('adm.servicios.index')
        ->with('servicios',$servicios);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('adm.servicios.edit')
            ->with('servicio',$servicio);
    }

    public function update(ServicioRequest $request, $id)
    {
        $servicio=servicio::find($id);
        $servicio->titulo=$request->titulo;
        $servicio->subtitulo=$request->subtitulo;
        $servicio->descripcion=$request->descripcion;
        $servicio->orden=$request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/servicio/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $servicio->imagen = 'img/servicio/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        
        $servicio->save();
        
        return redirect()->route('servicios.index');
    }

    public function destroy($id)
    {
        //
    }
}
