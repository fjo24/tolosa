<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{
    public function index(Request $request)
    {
        $dato  = empresa::orderBy('id','ASC')->get();
    	return view('admin.empresa.index')
        ->with('datos',$dato);
    }

	public function edit($id)
    {
        $dato = empresa::find($id);
        return view('admin.empresa.edit')
            ->with('dato',$dato);
    }

    public function update(Request $request, $id)
    {
        $dato=empresa::find($id);
        $dato->descripcion=$request->descripcion;
        
        $dato->save();
        
        return redirect()->route('empresa.index');
    }
}
