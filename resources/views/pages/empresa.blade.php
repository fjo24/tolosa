@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/home.css') }}">
@endsection
@section('contenido')
<div class="container-fluid">
   <div class="slider" >
      <ul class="slides">
      @foreach($sliders as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="width: 120%; height: 110%">
            <div class="caption" style="text-align: left; position: absolute;top: 35%;left: 7%;font-size:50px; background-color: rgba(23, 27, 66, 0.9); width: 467px; height: 200px; line-height: 100%; font-family: 'Source Sans Pro', sans-serif">
               <div style="padding-top: 25px">  
                  <span style="text-align: left; padding: 3%;font-weight: lighter;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: lighter;">{!! $slider->texto !!}</span>
                  <span style="padding: 3%;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: bold;">{!! $slider->texto2 !!}</span>
                  <hr style="position: absolute; left: 20px; bottom: 25px ;width: 80%">
               </div>
            </div>
            </li>
      @endforeach
      </ul>
   </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('.slider').slider({
        indicators: true,
        height: 549
    });
  
</script>
@endsection