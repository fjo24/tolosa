<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

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

    public function update(Request $request, $id)
    {
        $servicio=servicio::find($id);
        $servicio->titulo=$request->titulo;
        $servicio->descripcion=$request->descripcion;
        $servicio->orden=$request->orden;
        
        $servicio->save();
        
        return redirect()->route('servicios.index');
    }

    public function destroy($id)
    {
        //
    }
}
