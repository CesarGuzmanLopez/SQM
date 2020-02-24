<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<html lang="es">
    <head>
      <title>{{$title??env('APP_NAME')}}</title><!-- Meta Etiquetas  -->
      <meta name="author" content="Cesar Gerardo ,CesarGuzman@ieee.org">
      <meta name="copyright" content="Cesar Gerardo Guzman Lopez"><link rel="icon"  href="{{asset($icon ?? '') }}">        <meta name="robots" content="index, follow" />
      <meta name="language" content="es"><meta name="generator" content="Eclipse"><meta http-equiv="X-UA-Compatible" content="IE=edge"><base target ="_self">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=0.7"><meta name="Classification" content="Quimica "><meta name="msapplication-TileColor" content=" #009900" />
      <meta charset="utf-8">
  
      <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}?<?=date("my")?>">
          @section('styles') 
   	  @show	  
   </head>
   <body>
   <div id="container-fluid p-0 m-0" >     
	@section('header') 
	@include('partials.menu_user') 
	@show 

@section('content_main')
@show 
        
@section('footer')
        <footer class="  fixed-bottom   bg-white">
            <div class=" text-center pb-2">© <?=date("Y") ?> Copyright:
              <a href=" ">{{env('APP_NAME')}}</a>
            </div>
        </footer>
@show
    </div>
   <script type="text/javascript" src="{{asset('js/app.js') }}?<?="0.".date("my").".0"?>"></script>
@yield('scripts')
   </body>
</html>