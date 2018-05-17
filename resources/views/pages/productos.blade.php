@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')


@endsection
@section('contenido')
<div class="row">
  <div class="col s12">
              @foreach($categorias as $categoria)
                  <div class="div-product">
                    <img style="" class="responsive-img" src="{{asset('$categoria->imagen')}}" alt="">
                    <div class="div-nombre">dds</div>
                  </div>
              @endforeach
  </div>
</div>
@endsection

@section('js')

@endsection