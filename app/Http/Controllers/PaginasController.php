<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Destacado;
use App\Categoria;
use App\Producto;
use App\Contenidoempresa;
use App\Home;
use App\Obra;
use App\Fabrica;
use App\Servicio;
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

    public function categorias(){
        $categorias = Categoria::OrderBy('orden', 'asc')->get();
        return view('pages.categorias', compact('categorias'));
    }

    public function productos($id)
    {
        $categoria = Categoria::find($id);
        $productos = Producto::OrderBy('orden', 'asc')->where('categoria_id', $id)->get();
        return view('pages.productos', compact('productos', 'categoria'));
    }

    public function productoinfo($id)
    {
        $producto = Producto::find($id);
        $idc = $producto->categoria_id;
        $categoria = Categoria::find($idc);
        return view('pages.productoinfo', compact('producto', 'categoria'));
    }

    public function servicios(){
        $sliders  = Slider::orderBy('orden','ASC')->Where('seccion', 'servicios')->get();
        $servicios = Servicio::OrderBy('id', 'ASC')->get();
        return view('pages.servicios', compact('sliders', 'servicios'));
    }

    public function obra(){
        $obras = Obra::OrderBy('id', 'ASC')->get();
        $sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'obras')->get();
        return view('pages.obra', compact('obras', 'sliders'));
    }

    public function obrainfo($id){
        $obra = Obra::find($id);
        $sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'obras')->get();
        return view('pages.obra', compact('obra', 'sliders'));
    }

    public function fabrica(){
        $fabrica = Fabrica::all()->first();
        $sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'fabrica')->get();
        return view('pages.fabrica', compact('fabrica', 'sliders'));
    }

}