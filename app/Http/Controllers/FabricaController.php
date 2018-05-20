<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FabricaRequest;
use App\Fabrica;

class FabricaController extends Controller
{
    public function index(Request $request)
    {
    	$fabrica  = Fabrica::all()->first();
        return redirect()->route('fabrica.edit', $fabrica->id);
    }

    public function edit($id)
    {
        $fabrica = Fabrica::find($id);
        return view('adm.fabrica.edit')
            ->with('fabrica',$fabrica);
    }

    public function update(FabricaRequest $request, $id)
    {
        $fabrica=Fabrica::find($id);
        $id = Fabrica::all()->max('id');
        $fabrica->titulo = $request->titulo;
        $fabrica->titulo2 = $request->titulo2;
        $fabrica->contenido = $request->contenido;
        $fabrica->contenido2 = $request->contenido2;
        $id++;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/fabrica/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $fabrica->imagen = 'img/fabrica/' . $id.'_'.$file->getClientOriginalName();
            }
        }

        $fabrica->update();
        return redirect()->route('home');
    }

}
