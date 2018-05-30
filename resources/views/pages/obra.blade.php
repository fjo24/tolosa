@extends('pages.templates.body')
@section('title', 'Tolosa - Obra')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/obras.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/empresa.css') }}">
@endsection
@section('contenido')
  <div class="slider hide-on-med-and-down" >
      <ul class="slides">
      @foreach($sliders as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="width: 120%; height: 110%">
            <div class="caption empresa_slider_dif" style="">
               <div style="padding-top: 25px">  
                  <span style="text-align: left; padding: 3%;font-weight: lighter;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: lighter;">{!! $slider->texto !!}</span><br>
                  <span style="padding: 3%;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: bold;">{!! $slider->texto2 !!}</span>
                  <hr style="position: absolute; left: 20px; bottom: 25px ;width: 80%">
               </div>
            </div>
          </li>
      @endforeach
      </ul>
   </div>
<div class="container" style="width: 123%;">
   <div class="categorias" style="align-items: center">   
      <div style="margin: -30px 73px 90px 34px;">
         <div class="row"  style="align-items: center">
            <div class="col l12 s12 m12">
               @foreach($obras as $obra)  
                     <div class="col l4 s12 m12">
                        <div class="div-product" style="height: 375px;">
                           <a href="{{ route('obrainfo', $obra->id)}}">
                              <img style="width: 100%;" class="responsive-img" src="{{asset($obra->imagen)}}" alt="">
                                 <div class="div-nombre">
                                    {!!$obra->titulo !!}
                                 </div>

                                 <hr style="position: relative;top: 34px;width: 18%;height: 1px;border: 1px;border-radius: 10px; background-color: #32398C">
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
<script type="text/javascript">
    $('.slider').slider({
        indicators: true,
        height: 334
    });
</script>
@endsection