<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Destacado;
use App\Categoria;
use App\Contenidoempresa;
use App\Home;
use App\Fabrica;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function welcome(){
    	$sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'home')->get();
    	$home = Home::all()->first();
    	$destacados = Destacado::OrderBy('id', 'ASC')->get();
        return view('welcome', compact('sliders', 'destacados', 'home'));
    }

    public function empresa(){
    	$sliders  = Slider::orderBy('orden','ASC')->Where('seccion', 'empresa')->get();
        $contenido = Contenidoempresa::all()->first();
        return view('pages.empresa', compact('sliders', 'contenido'));
    }

    public function servicios(){
        $sliders  = Slider::orderBy('orden','ASC')->Where('seccion', 'servicios')->get();
        return view('pages.servicios', compact('sliders'));
    }

    public function categorias(){
    	$categorias = Categoria::OrderBy('id', 'ASC')->get();
        return view('pages.categorias', compact('categorias'));
    }

    public function productos(){
    	$sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'empresa')->get();
    	$home = Home::all()->first();
    	$destacados = Destacado::OrderBy('id', 'ASC')->get();
        return view('pages.productos', compact('sliders', 'destacados'));
    }

    public function fabrica(){
        $fabrica = Fabrica::all()->first();
        return view('pages.fabrica', compact('fabrica'));
    }

}
