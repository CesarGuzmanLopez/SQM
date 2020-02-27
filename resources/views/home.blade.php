@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12" >
            Home
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<html lang="es">
    <head>
      <title>Sociedad Quimíca de México</title><!-- Meta Etiquetas  -->
      <meta name="author" content="Cesar Gerardo ,CesarGuzman@ieee.org">
      <meta name="copyright" content="Cesar Gerardo Guzman Lopez"><link rel="icon"  href="http://sqm.localhost/">        <meta name="robots" content="index, follow" />
      <meta name="language" content="es"><meta name="generator" content="Eclipse"><meta http-equiv="X-UA-Compatible" content="IE=edge"><base target ="_self">
	  <meta name="csrf-token" content="OdG461bSQ6QeDrK6N3mODKHv1czNRIelNO16Y7vV">
      <meta name="viewport" content="width=device-width, initial-scale=0.7"><meta name="Classification" content="Quimica "><meta name="msapplication-TileColor" content=" #009900" />
      <meta charset="utf-8">
  
      <link rel="stylesheet" type="text/css" href="http://sqm.localhost/css/app.css?0220">
           
   	  	  
   </head>
   <body>
    
 
	<div class="container-fluid  justify-content-center m-0 p-0 shadow-sm col-12" id="Menu" style="font-size:12px;"> 
<nav class="navbar navbar-expand-lg bg-black text-light  navbar-dark py-0 default-color my-0" id="principal_menu">
  <a class="navbar-brand" style="font-size:15px;" href="#">SQM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://sqm.localhost">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://sqm.localhost/admin/home">Ingresar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <span class=""> <input class="form-control border-bottom border-secondary mr-sm-2 text-white py-0 my-0 " style="height: 14px !important; font-size:12px;"   type="search" placeholder="Buscar" aria-label="Search"></span>
    </form>
  </div>
</nav> 
<div class="row pt-2 pl-3 m-0 mb-2   m-0 rounded mb-0 ">   
  <div  class="col-2  p-2 col-md-1 align-self-center m-0   p-0" >
		 <b-img  src="./img/SQM.png" fluid-grow alt="Fluid image"></b-img>
  </div>
  <div  class="offset-md-2 col-5 col-md-3 align-self-center px-4 border-right border-gray" >
  	  <b-img  src="./img/Journal_Chemistry.png " fluid-grow alt="Fluid image"></b-img>
  </div>
  <div  class="col-5 col-md-3  align-self-center px-4 border-right border-gray " >
  	  <b-img  src="./img/Boletin_Quimica.png" fluid-grow alt="Fluid image"></b-img>
  </div>
  <div  class=" px-3  col-12 col-md-3  align-self-center" >
  <div class="row">
	<div class="col-3 align-self-center text-center">
		<div  class="text-primary" style="font-size: 20px;"><i class="fa fa-phone text-secondary" aria-hidden="true"></i>  </div>
    </div>
    <div class="col-8 p-md-0 p-4">
		<div class="text-black" style=""><div><b>Contacto</b></div>
	  		<div>
	  		 +5255 56626837
	  		<div>
	  		 +5255 56626823
	  		</div>
		</div>
	</div>	
	</div>
	<div class="col-3 align-self-center text-center">
		<div  class="text-primary" style="font-size: 20px;"><i class="fa fa-envelope text-secondary" aria-hidden="true"></i>  </div>
    </div>
    <div class="col-8 p-md-0 p-4 ">
		<div class="text-black" style="   "><div><b>Correo</b></div>
	 		soquimex@sqm.org.mx
		</div>
	</div>
  </div>
 </div>	
</div>   
<div class="row  justify-content-center menublue p-0 m-0" id="navbar">
<nav class= "col-md-11 col-12 row  navbar navbar-expand navbar-white  shadow   m-0 p-0 py-1 navbar mt-0 bg-primary"  > 
  <div class=" col-8 col-md-9 col-sm-7 text-white p-0 m-0">
   <div>
      <b-navbar  type="dark" >
   
    <b-navbar-toggle target="nav-collapse is-nav " class="text-white" ></b-navbar-toggle>
    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item href="#" ><div  class="text-light" >¿Quienes Somos?</div></b-nav-item>
        <b-nav-item href="#"><div  class="text-light" >Directorio</div></b-nav-item>
       	<b-nav-item href="#"><div  class="text-light" >Congresos</div></b-nav-item>
       	<b-nav-item href="#"><div  class="text-light" >Premios</div></b-nav-item>

       <b-nav-item href="#"><div  class="text-light" >Quimica en la vida</div></b-nav-item>
       <b-nav-item href="#"><div  class="text-light" >Instalaciones</div></b-nav-item>
       <b-nav-item href="#"><div  class="text-light" >Membresia</div></b-nav-item>

      </b-navbar-nav>
      <b-navbar-nav class="ml-auto">
        <b-nav-item-dropdown right>
          <!-- Using 'button-content' slot -->
          <template v-slot:button-content>
            <em class="text-white">User</em>
          </template>
          <b-dropdown-item href="#">Profile</b-dropdown-item>
          <b-dropdown-item href="#">Sign Out</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
   </div>
   
  </div>
	<div style="font-size: 30px; text-align: right;"  class="col-4 col-md-3 col-sm-5">
        <b><i class="fab fa-facebook text-light"  ></i></b>
        <b><i class="fab fa-youtube text-light"  ></i></b>   
        <b><i class="fab fa-twitter text-light"  ></i></b>
        <b><i class="fab fa-instagram text-light"  ></i></b>
    </div>  

</nav>
</div>

</div>  
 
	<div class="container-fluid p-0 m-0 content" id="principal"> 
 
<div  class="container-fluid justify-content-center p-0" id="AUX"> 
 <div class="row justify-content-center p-0  m-0"> 
  <div class="col-12 m-0   p-0 bg-secondary text-light" id="slider_prin">
   <div class="container-fluid  p-0 m-0">
    <div class="row p-0 m-0">
     <div class="col-12 m-0  p-0"> 
      <b-carousel
          id="carousel-1"
          :interval="20000"

          background="#ababab"
          img-width="100%"
          img-height="2800"
          style="text-shadow: 1px 1px 2px #333;" 
      >
       <b-carousel-slide class="p-0 m-0 "  img-height="240" img-src="img/A_SQM.jpg"  >
		
       </b-carousel-slide> 
      </b-carousel>
     </div> 	
	</div>
   </div>
  </div>
 </div> 
 
 <div class="d-flex flex-row">
 
  <div class="row  m-0">
 	<div class="col p-0  m-0">
  		<b-img src="img/1.png" fluid class="p-0"></b-img> 
    </div>
 	<div class="col p-0">
        		<b-img src="img/2.png" fluid class="p-0"></b-img> 
    </div>
 	<div class="col p-0">
      		<b-img src="img/3.png" fluid class="p-0"></b-img> 
 	    </div>
 	
 	<div class="col p-0">
      		<b-img src="img/4.png" fluid class="p-0"></b-img> 
    </div>
 	<div class="col p-0">
      		<b-img src="img/5.png" fluid class="p-0"></b-img> 
    </div> 
  </div >

 
 </div>
 <div class="row container-fluid justify-content-center"> 
 	<div class="pt-5 mt-4" style="font-size: 40px;">
 		<p class="px-3 text-primary">CONVOCATORIAS</p>
 	</div> 
 </div>
<div class="row p-5 ">
 <b-card-group deck>
    <b-card title="Title" img-src="" img-alt="Image" img-top>
      <b-card-text>
        This is a wider card with supporting text below as a natural lead-in to additional content.
        This content is a little bit longer.
      </b-card-text>
      <template v-slot:footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>

    <b-card title="Title" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
      <b-card-text>
        This card has supporting text below as a natural lead-in to additional content.
      </b-card-text>
      <template v-slot:footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>

    <b-card title="Title" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
      <b-card-text>
        This is a wider card with supporting text below as a natural lead-in to additional content.
        This card has even longer content than the first to show that equal height action.
      </b-card-text>
      <template v-slot:footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>
    <b-card title="Title" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
      <b-card-text>
        This is a wider card with supporting text below as a natural lead-in to additional content.
        This card has even longer content than the first to show that equal height action.
      </b-card-text>
      <template v-slot:footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>
  </b-card-group>
</div>

</div>

 
    </div>
    <footer class="  fixed-bottom   bg-white">
         <div class=" text-center pb-2">© 2020 Copyright:
            <a href=" ">Sociedad Quimíca de México</a>
          </div>
    </footer>
    <script type="text/javascript" src="http://sqm.localhost/js/app.js?0.0220.0"></script>
   </body>
</html>