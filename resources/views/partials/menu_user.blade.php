<div class="container-fluid m-0 p-0 bg-black text-light shadow col-12" id="Menu"> 
<nav class="navbar navbar-expand-lg navbar-dark py-0 default-color my-0">
  <a class="navbar-brand" href="#">SQM</a>
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
     <span class=""> <input class="form-control border-bottom border-secondary mr-sm-2 text-white py-0 my-0 "   type="search" placeholder="Buscar" aria-label="Search"></span>
      <button class="btn btn-outline-secondary my-2 my-sm-0 text-white py-0 my-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</div>