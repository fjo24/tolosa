<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function welcome(){
    	$sliders  = Slider::orderBy('id','ASC')->get();
        return view('welcome', compact('sliders'));
    }
}
