@extends('layouts.Plantilla_Principal')
@section('content_main') 
<div id="AUX">
<div  class="container-fluid justify-content-center p-0" > 
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
          style="text-shadow: 1px 1px 2px #333;" >
      	<b-carousel-slide class="p-0 m-0 "  img-height="240" img-src="{{ asset('img/A_SQM.jpg')}}"  >
        </b-carousel-slide> 
      </b-carousel>
     </div> 	
	</div>
   </div>
  </div>
 </div> 
 <div class="d-flex flex-row"> 
  <div class="row  m-0">
 	<div class="col-md col-6 p-0  m-0">
  		<b-img src="{{ asset('img/1.png')}}" fluid class="p-0"></b-img> 
    </div>
 	<div class="col-md col-6 p-0  m-0">
		<b-img src="{{ asset('img/2.png')}}" fluid class="p-0"></b-img> 
    </div>
 	<div class="col-md col-6 p-0  m-0">
  		<b-img src="{{ asset('img/3.png')}}" fluid class="p-0"></b-img> 
    </div>
 	<div class="col-md col-6 p-0  m-0">
      	<b-img src="{{ asset('img/4.png')}}" fluid class="p-0"></b-img> 
    </div>
 	<div class="col-md col-6 p-0  m-0">
      	<b-img src="{{ asset('img/5.png')}}" fluid class="p-0"></b-img> 
    </div> 
 	<div class="col-md col-6 p-0  m-0">
  		<b-img src="{{ asset('img/1.png')}}" fluid class="p-0"></b-img> 
    </div>
 	<div class="col-md col-6 p-0  m-0">
      	<b-img src="{{ asset('img/2.png')}}" fluid class="p-0"></b-img> 
    </div>
 	<div class="col-md col-6 p-0  m-0">
      	<b-img src="{{ asset('img/3.png')}}" fluid class="p-0"></b-img> 
	</div> 
 	<div class="col-md col-6 p-0  m-0">
    	<b-img src="{{ asset('img/4.png')}}" fluid class="p-0"></b-img> 
    </div>
 	<div class="col-md col-6 p-0  m-0">
    	<b-img src="{{ asset('img/5.png')}}" fluid class="p-0"></b-img> 
    </div> 
  </div > 
 </div>







</div>

<!-- a  data-toggle="modal" data-target="#myModal">Large modal</a-->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="myModal" aria-labelledby="myModal" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">APORTACIONES DE LAS CIENCIAS QUÍMICAS A LA SOLUCIÓN DE PROBLEMAS NACIONALES EN MATERIA DE HIDROCARBUROS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    		
    
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-6 justify-content-center">
			    <b-img src="{{ asset('img/cartel.jpg')}}" fluid class="p-0"></b-img> 
			</div>
			<div class="col-md-6 justify-content-center">
						    <b-img src="{{ asset('img/cartel.png')}}" fluid class="p-0"></b-img> 
			
			</div>
		</div>
		 </div>
	  <div class="modal-footer">
         <a class="button" type="button"  href="https://sqm.org.mx/index.php?option=com_content&view=article&id=281:1-foro&catid=8&Itemid=101" class="btn btn-secondary" type="submit">Mas información</a>
      </div> 
    </div>
  </div>
</div>	
</div>
@endsection
