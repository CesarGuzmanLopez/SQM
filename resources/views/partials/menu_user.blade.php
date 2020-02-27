<div class="container-fluid  justify-content-center m-0 p-0 shadow-sm col-12" id="Menu" style="font-size:12px;"> 
<nav class="navbar navbar-expand-lg bg-black text-light  navbar-dark py-0 default-color my-0" id="principal_menu">
  <a class="navbar-brand" style="font-size:15px;" href="#">SQM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/home')}}">Ingresar</a>
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
       <b-nav-item href="{{url('/Membresia')}}"><div  class="text-light" >Membresia</div></b-nav-item>

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