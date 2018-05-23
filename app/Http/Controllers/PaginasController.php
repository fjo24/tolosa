<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use App\Slider;
use App\Destacado;
use App\Categoria;
use App\Producto;
use App\Contenidoempresa;
use App\Home;
use App\Empresa;
use App\Obra;
use App\Modelo;
use App\Fabrica;
use App\Servicio;
use App\Http\Requests\ContactoRequest;
use Illuminate\Http\Request;
use App\Mail\sendmail;
//use Mail;

class PaginasController extends Controller
{
    public function welcome(){
    	$sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'home')->get();
    	$home = Home::all()->first();
    	$destacados = Destacado::OrderBy('orden', 'ASC')->get();
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

    public function modelos($id)
    {
        $producto = Producto::find($id);
        $categoria=Categoria::find($producto->categoria_id);
        $modelos = Modelo::OrderBy('orden', 'asc')->where('producto_id', $id)->get();
        return view('pages.modelos', compact('producto', 'modelos', 'categoria'));
    }

    public function modeloinfo($id)
    {
        $modelo = Modelo::find($id);
        $categorias = Categoria::OrderBy('orden', 'asc')->get();
        $producto = Producto::find($modelo->producto_id);
        $idc = $producto->categoria_id;
        $categoria = Categoria::find($idc);
        return view('pages.modeloinfo', compact('producto', 'categoria', 'modelo', 'categorias'));
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
        return view('pages.obrainfo', compact('obra', 'sliders'));
    }

    public function fabrica(){
        $fabrica = Fabrica::all()->first();
        $sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'fabrica')->get();
        return view('pages.fabrica', compact('fabrica', 'sliders'));
    }

    public function presupuesto(){
        $sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'presupuesto')->get();
        return view('pages.presupuesto', compact('sliders'));
    }

    public function enviarpresupuesto(Request $request){
        $sliders  = Slider::orderBy('id','ASC')->Where('seccion', 'presupuesto')->get();
        $nombre= $request->nombre;
        $mail= $request->mail;
        $localidad= $request->localidad;
        $tel= $request->tel;
        $detalle= $request->detalle;
        $medida= $request->medida;

        
        $newid = producto::all()->max('id');
        $newid++;

        if ($request->hasFile('archivo')) {
            if ($request->file('archivo')->isValid()) {
                $file = $request->file('archivo');
                $path = public_path('img/archivos/');
                $request->file('archivo')->move($path, $newid.'_'.$file->getClientOriginalName());
                $archivo = 'img/archivos/' . $newid.'_'.$file->getClientOriginalName();
                
            }
        }

         Mail::send('pages.emails.presupuestomail', ['nombre' => $nombre, 'tel' => $tel, 'mail' => $mail, 'localidad' => $localidad, 'detalle' => $detalle, 'medida' => $medida], function ($message) use ($archivo){

         $dato= Empresa::where('tipo','mail')->first();
            $message->from($dato->descripcion, 'Aberturas Tolosa');

            $message->to($dato->descripcion);

            //Attach file
            $message->attach($archivo);

            //Add a subject
            $message->subject("Presupuesto");

        });
        if (Mail::failures()) {
            flash('Ha ocurrido un error.')->error()->important();
            return view('pages.presupuesto');
        }
        flash('El mensaje se ha enviado exitosamente.')->success()->important();
        return view('pages.presupuesto', compact('sliders'));
    }

    public function contacto(){
        return view('pages.contacto');
    }

    public function enviarmail(Request $request){
        
        $dato= Empresa::where('tipo','mail')->first();
        $nombre= $request->nombre;
        $apellido= $request->apellido;
        $empresa= $request->empresa;
        $email= $request->email;
        $mensaje= $request->mensaje;

        Mail::to($dato->descripcion)->send(new sendmail($nombre,$apellido,$empresa,$mensaje,$email));
        if (Mail::failures()) {
            flash('Ha ocurrido un error.')->error()->important();
            return view('pages.contacto');
        }
        flash('El mensaje se ha enviado exitosamente.')->success()->important();
        return view('pages.contacto');
        }

}