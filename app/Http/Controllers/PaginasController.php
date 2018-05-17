<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Destacado;
use App\Home;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function welcome(){
    	$sliders  = Slider::orderBy('id','ASC')->get();
    	$home = Home::all()->first();
    	$destacados = Destacado::OrderBy('id', 'ASC')->get();
        return view('welcome', compact('sliders', 'destacados', 'home'));
    }
}
