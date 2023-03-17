@extends('layouts.app')

@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <style>
  .slider {
  text-align: center;
}

.slider img {
  display: inline-block;
}
</style>
</head>
    <div class="mt-2">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Clientes</a>
                    <a href="{{ route('regions.index') }}" class="btn btn-primary ml-3">Regiones</a>
    </div>
    <h1 style="text-align: center;">BIENVENIDOS</h1>
    <div class="row mt-2 mx-0 justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
          <div class="slider">
            <div><img src="https://mentorday.es/wikitips/wp-content/uploads/2019/12/5127314-1024x683.jpg"></div>
            <div><img src="https://thumbs.dreamstime.com/b/mundo-de-la-tierra-desde-un-fondo-blanco-redondo-157940184.jpg"></div>
            <div><img src="https://i.pinimg.com/originals/07/2c/a3/072ca354fd03c35de199f03a948fb4c9.png"></div>
        </div>
    </div>
<script>
$(document).ready(function(){
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: false
  });
});
</script>
@endsection
