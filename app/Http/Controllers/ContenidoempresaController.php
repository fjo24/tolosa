<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContenidoempresaRequest;
use App\Contenidoempresa;


class ContenidoempresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenidos  = Contenidoempresa::orderBy('id','ASC')->get();
        return view('adm.contenidoempresa.index')
        ->with('contenidos',$contenidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contenido = Contenidoempresa::find($id);
        return view('adm.contenidoempresa.edit')
            ->with('contenido',$contenido);
    }

    public function update(ContenidoempresaRequest $request, $id)
    {
        $contenido=Contenidoempresa::find($id);
        $id = Contenidoempresa::all()->max('id');
        $contenido->descripcion = $request->descripcion;
        $id++;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/contenidoempresas/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $contenido->imagen = 'img/contenidoempresas/' . $id.'_'.$file->getClientOriginalName();
            }
        }

        $contenido->update();
        return redirect()->route('contenidoempresa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
