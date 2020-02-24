@extends('layouts.Plantilla_Principal')
@section('content_main') 
<div  class="container-fluid justify-content-center" id="AUX">
<div class="container-fluid p-0 mx-0 ">
 <div class="row pt-4  shadow-sm  rounded">   
  <div  class="col-2 col-md-1 align-self-center   px-md-1" >
		 <b-img  src="./img/SQM.jpg" fluid-grow alt="Fluid image"></b-img>
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
 				<div  class="text-primary" style="font-size: 30px;"><i class="fa fa-phone" aria-hidden="true"></i>  </div>
            </div>
            <div class="col-8 p-md-0 p-4">
 				<div class="text-black" style="font-size: 20px;"><div><b>Contacto</b></div>
 			  		<div>
 			  		+5255 56626837
 			  		</div>
 			  		<div>
 			  		+5255 56626823
 			  		</div>
 				</div>
 	  		</div>	
  		</div>
  </div>	
  </div> 
  <div class="row justify-content-center p-0  m-0"  id="">

	<div class="col-12   p-0 bg-secondary text-light" id="slider_prin">
		<div class="container-fluid  p-0 m-0">
			<div class="row p-0 m-0">
				<div class="col-12 m-0  p-0">
 
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="20000"
      controls
      indicators
      background="#ababab"
      img-width="1024"
      img-height="480"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >


      <!-- Slides with custom text -->
      <b-carousel-slide img-src="img/A_SQM.jpg">
       </b-carousel-slide>

      <!-- Slides with image only -->
       <!-- Slides with custom text -->
      <b-carousel-slide img-src="img/B_SQM.jpg">
       </b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
      <b-carousel-slide img-src="img/C_SQM.jpg">
       </b-carousel-slide>  
    </b-carousel> 
  </div> 	
				</div>
			</div>
		</div>
   	<div class="col-12 col-md-11 shadow  px-0 m-0  menu_prin">
		@include('partials.menu')
	</div>

  </div>
  
</div> 

<div class="containter-fluid m-0  p-0 my-4 ">
	<div class="row">
	
		<div class="col-6">
			<div style="height: 300px;"></div>
			
		</div>
	
	</div>
	
</div>
</div>
@endsection
