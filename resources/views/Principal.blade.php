@extends('layouts.Plantilla_Principal')
@section('content_main') 
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
<div class=" row m-0 p-5 ">
 <b-card-group class="row m-0" deck>

    <b-card title="Congreso mexicano de química" img-src="img/A.png" img-alt="Image" img-top>
      <b-card-text>
        This is a wider card with supporting text below as a natural lead-in to additional content.
        This content is a little bit longer.
      </b-card-text>
      <template v-slot:footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>
    <b-card title="Congreso mexicano de química" img-src="img/A.png" img-alt="Image" img-top>
      <b-card-text>
       </b-card-text>
      <template v-slot:footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>

    <b-card title="Premio nacional de química 'Andrés Manual Del Rio'" img-src="img/B.png" img-alt="Image" img-top>
      <b-card-text>
       
      </b-card-text>
      <template v-slot:footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>
    <b-card title="Premio a las mejores tesis de licenciatura, maestria y doctorado" img-src="img/C.png" img-alt="Image" img-top>
      <b-card-text>
        
      </b-card-text>
      <template v-slot:footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>
  </b-card-group>
</div>

</div>

@endsection
