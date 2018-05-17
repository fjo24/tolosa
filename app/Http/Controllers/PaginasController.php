<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Destacado;
use App\Categoria;
use App\Home;
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
    	$sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'empresa')->get();
    	$home = Home::all()->first();
    	$destacados = Destacado::OrderBy('id', 'ASC')->get();
        return view('welcome', compact('sliders', 'destacados', 'home'));
    }

    public function categorias(){
    	$categorias = Categoria::OrderBy('id', 'ASC')->get();
    	$destacados = Destacado::OrderBy('id', 'ASC')->get();
        return view('pages.categorias', compact('categorias'));
    }

    public function productos(){
    	$sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'empresa')->get();
    	$home = Home::all()->first();
    	$destacados = Destacado::OrderBy('id', 'ASC')->get();
        return view('pages.productos', compact('sliders', 'destacados'));
    }
}
