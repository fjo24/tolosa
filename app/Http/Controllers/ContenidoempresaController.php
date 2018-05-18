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
        $contenidoempresa  = Contenidoempresa::all()->first();
        return redirect()->route('contenidoempresa.edit', $contenidoempresa->id);
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
        $contenidoempresa = Contenidoempresa::find($id);
        return view('adm.contenidoempresa.edit')
            ->with('contenidoempresa',$contenidoempresa);
    }

    public function update(ContenidoempresaRequest $request, $id)
    {
        $contenidoempresa=Contenidoempresa::find($id);
        $id = Contenidoempresa::all()->max('id');
        $contenidoempresa->titulo = $request->titulo;
        $contenidoempresa->contenido = $request->contenido;
        $contenidoempresa->contenido2 = $request->contenido2;

        $id++;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/contenidoempresas/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $contenidoempresa->imagen = 'img/contenidoempresas/' . $id.'_'.$file->getClientOriginalName();
            }
        }

        $contenidoempresa->update();
        return redirect()->route('home');
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
