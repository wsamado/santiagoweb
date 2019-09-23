<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- CSS - BOOTSTRAP -->
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Santiago Web</title>
  </head>
  <body>
  <!-- NAV BAR -->
    <nav class="navbar navbar-expand-md fixed-top top-nav">
    	<div class="container">
    		  <a class="navbar-brand" href="#"><strong>SantiagoWeb.com</strong></a>
    		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    		  </button>

    		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    		    <ul class="navbar-nav ml-auto">
    		      <li class="nav-item active">
    		        <a class="nav-link" href="/inicio">Inicio <span class="sr-only">(current)</span></a>
    		      </li>
    		      <li class="nav-item">
    		        <a class="nav-link" href="/portafolio">Portafolio</a>
    		      </li>
    		      <li class="nav-item">
    		        <a class="nav-link" href="/sobremi">Sobre Mi</a>
    		      </li>
    		      <li class="nav-item">
    		        <a class="nav-link" href="/contacto">Contactame</a>
    		      </li>
    		    </ul>
    		  </div>
    	</div>
    </nav>
  <!-- CONTENIDO -->
  @yield('contenido')
  <!-- SCRIPTS -->
  <script src="js/web.js" type="text/javascript"
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <footer>
    <section id="footer">
  		<div class="container">
  			<div class="row text-center text-xs-center text-sm-left text-md-left">
  				<div class="col-xs-12 col-sm-4 col-md-4">
  					<h5>Información</h5>
  					<ul class="list-unstyled quick-links">
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Inicio</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Portafolio</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Sobre Mi</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Contactame</a></li>
  					</ul>
  				</div>
  				<div class="col-xs-12 col-sm-4 col-md-4">
  					<h5>Desarrollador</h5>
  					<ul class="list-unstyled quick-links">
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Java</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>C++</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>.NET</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>JavaScript</a></li>
  					</ul>
  				</div>
  				<div class="col-xs-12 col-sm-4 col-md-4">
  					<h5>Contactame</h5>
  					<ul class="list-unstyled quick-links">
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>+57 333 111444</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>santiago@ejemplo.com</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>14 Tottenham Road, London, England.</a></li>
  						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>812 333333</a></li>
  					</ul>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
  					<ul class="list-unstyled list-inline social text-center">
  						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
  						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
  						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
  						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
  						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
  					</ul>
  				</div>
  				</hr>
  			</div>
  			<div class="row">
  				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
  					<p class="h6">&copy All right Reversed.</p>
  				</div>
  				</hr>
  			</div>
  		</div>
  	</section>
  </footer>
</html>
