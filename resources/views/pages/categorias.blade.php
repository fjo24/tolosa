@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/categorias.css') }}">

@endsection
@section('contenido')

<div class="flex-containter">
   <div class="categorias" style="align-items: center">   
      <div style="margin: 7% 7%;">
         <div class="row"  style="align-items: center">
            <span style ="">Productos</span>
            <div class="col l12 s12 m12">
               @foreach($categorias as $categoria)  
                     <div class="col l4 s4 m4">
                        <div class="div-product" style="height: 480px;">
                           <a href="{{ route('productos', $categoria->id)}}">
                              <img style="width: 100%;" class="responsive-img" src="{{asset($categoria->imagen)}}" alt="">
                                 <div class="div-nombre">
                                    {!!$categoria->nombre !!}
                                 </div>
                              <hr>
                           </a>
                        </div>
                     </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>

@endsection

@section('js')

@endsection