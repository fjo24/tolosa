<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DestacadosRequest;
use App\Destacado;

class DestacadosController extends Controller
{
    public function index()
    {
        $destacados = destacado::orderBy('orden','ASC')->paginate(5);
        return view('adm.destacados.index')
        ->with('destacados',$destacados);
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
        $destacado = Destacado::find($id);
        return view('adm.destacados.edit')
            ->with('destacado',$destacado);
    }

    public function update(DestacadosRequest $request, $id)
    {
        $destacado=Destacado::find($id);
        $id = Destacado::all()->max('id');
        $destacado->descripcion = $request->descripcion;
        $destacado->link = $request->link;
        $destacado->orden = $request->orden;
        $id++;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/destacado/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $destacado->imagen = 'img/destacado/' . $id.'_'.$file->getClientOriginalName();
            }
        }

        $destacado->update();
        return redirect()->route('destacados.index');
    }

    public function destroy($id)
    {
        //
    }
}
