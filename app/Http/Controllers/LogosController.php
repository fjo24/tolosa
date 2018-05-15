<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LogosRequest;
use App\Logo;
use Laracasts\Flash\Flash;

class LogosController extends Controller
{
    public function index()
    {
        $logos  = logo::orderBy('id','ASC')->get();
    	return view('adm.logos.index', compact('logos'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        

    }

	public function edit($id)
    {
        $logo = logo::find($id);
        return view('adm.logos.edit', compact('logo'));
    }

    public function update(Request $request, $id)
    {
        dd($request->tipo);
    	$logo = Logo::find($id);
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/logo/');
                if ($request->tipo == 'header') {
                    $request->file('imagen')->move($path, 'img/logo/logo-header.png');
                    $logo->imagen = 'img/logo/logo-header.png';
                }
                
            }
        }
        $logo->save();

        Flash::success("Se ha cambiado el logo de manera exitosa!")->important();        
        return redirect()->route('logos.index');
    }
}
