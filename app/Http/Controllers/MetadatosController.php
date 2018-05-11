<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metadato;

class MetadatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metadatos  = metadato::orderBy('id','ASC')->paginate(10);
        return view('adm.metadato.index')
        ->with('metadatos',$metadatos);
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
        $metadato = metadato::find($id);
        return view('adm.metadato.edit')
            ->with('metadato',$metadato);
    }

    public function update(Request $request, $id)
    {
        $metadato=metadato::find($id);
        $metadato->keywords=$request->keywords;
        $metadato->description=$request->description;
        
        $metadato->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('metadatos.index');
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
