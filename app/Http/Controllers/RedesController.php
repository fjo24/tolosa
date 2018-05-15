<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Red;

class RedesController extends Controller
{
    //'nombre', 'link', 'logo', 'ubicacion'
    public function index(Request $request)
    {
        $redes  = Red::orderBy('id','ASC')->paginate(5);
    	return view('adm.redes.index', compact ('redes'));
    }
    public function create()
    {
        return view('adm.redes.create');
    } 
    public function store(Request $request)
    {
        $red = new Red();
        $id = Red::all()->max('id');
        $red->nombre= $request->nombre;
        $red->link = $request->link;
        $red->orden = $request->orden;
        $red->ubicacion = $request->ubicacion;
        $id++;
        if ($request->hasFile('logo')) {
            if ($request->file('logo')->isValid()) {
                $file = $request->file('logo');
                $path = public_path('img/redes/');
                $request->file('logo')->move($path, $id.'_'.$file->getClientOriginalName());
                $red->logo = 'img/redes/'. $id.'_'.$file->getClientOriginalName();
                
            }
        }
        $red->save();
        flash('Se ha registrado '. $red->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('redes.index');
    }
    public function edit($id)
    {
        $red = Red::find($id);
        return view('adm.redes.edit', compact('red'));
    }
    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {

        $red=Red::find($request->id);
        $id = Red::all()->max('id');
        $red->nombre= $request->nombre;
        $red->link = $request->link;
        $red->orden = $request->orden;
        $red->ubicacion = $request->ubicacion;
        $id++;
        if ($request->hasFile('logo')) {
            if ($request->file('logo')->isValid()) {
                $file = $request->file('logo');
                $path = public_path('img/redes/');
                $request->file('logo')->move($path, $id.'_'.$file->getClientOriginalName());
                $red->logo = 'img/redes/'. $id.'_'.$file->getClientOriginalName();
                
            }
        }
        $red->save();
        flash('Se ha registrado '. $red->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('redes.index');
    }

    public function destroy($id)
    {
        $red= Red::find($id);
        $red -> delete();
        flash('Se ha eliminado correctamente.')->success()->important();
        return redirect()->route('redes.index');
    }
}
