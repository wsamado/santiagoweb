@extends('main')
@section('contenido')
<section>
	    <div id="banner-portfolio" class="container-fluid">
	            <div class="row justify-content-center">
	                <div id="banner-content" class="col-lg-8 col-sm-12 col-md-12">
	                    <div class="banner-text">
	                        <h1 class="text-white">Mi portafolio</h1>
	                    </div>
	                </div>
	            </div>
	    </div>
	</section>
  <!-- Page Content -->
<div class="container portfolio-sec">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Trili App -
    <small>Comparador de precios</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="img/port1.jpg" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Descripción del proyecto</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3">Lenguajes Usados</h3>
      <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>Python</li>
        <li>JQuery</li>
      </ul>
    </div>

  </div>
    <h3 class="my-4">Mis proyectos relevantes</h3>
      <div class="row">
        <div class="col-md-3 col-sm-6 mb-4">
          <p class="text-center">Namino</p>
          <a href="#">
          <img class="img-fluid" src="img/port2.jpg" alt="">
          </a>
        </div>
      <div class="col-md-3 col-sm-6 mb-4">
          <p class="text-center">Calculadora en terminal Linux</p>
          <a href="#">
          <img class="img-fluid" src="img/port3.jpg" alt="">
          </a>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
          <p class="text-center">Web - Multisi</p>
          <a href="#">
          <img class="img-fluid" src="img/port4.jpg" alt="">
          </a>
       </div>
       <div class="col-md-3 col-sm-6 mb-4">
          <p class="text-center">Pac-Man en Unity</p>
            <a href="#">
            <img class="img-fluid" src="img/port5.jpg" alt="">
            </a>
        </div>
      </div>
  </div>
@endsection
