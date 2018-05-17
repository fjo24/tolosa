@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">

@endsection
@section('contenido')
<div class="destacados">   
      <div style="">
         <div class="row">
            <div class="col s12">
               @foreach($categorias as $destacado)  
                  <div class="col-s4">
         
                     <div class="img">
                         <img src="{{asset($destacado->imagen)}}" alt="Image">
                     </div>
                  <div class="clear"></div>
                     <span>{!!$destacado->nombre !!}</span></a>
                  </div> 

               @endforeach
            </div>
         </div>
      </div>
   </div>
@endsection

@section('js')

@endsection