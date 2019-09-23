@extends('main')
@section('contenido')
<section>
	    <div id="banner-contact" class="container-fluid">
	            <div class="row justify-content-center">
	                <div id="banner-content" class="col-lg-8 col-sm-12 col-md-12">
	                    <div class="banner-text">
	                        <h1 class="text-white">Contactate conmigo</h1>
	                        <p class="text-white">¿Que estas esperando?</p>
	                    </div>
	                </div>
	            </div>
	    </div>
	</section>
	<!--FORMULARIO Y DATOS-->
	<section id="form-section" class="form-section">
        <div class="container form">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-12">
                        <h2 class="font-strong">Contactame</h2>
                        <p>Si tienes un proyecto en mente, No dudes en contactarme. Hablemos juntos. Colaborare en su proyecto para hacerlo rápidamente.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <form action="./php/correo.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 ">
                                <input name="name" type="text" class="form-control in-lab" placeholder="Nombre" required>
                            </div>
                            <div class="col-md-6 ">
                                <input name="email" type="email" class="form-control in-lab" placeholder="Correo" required>
                            </div>
                            <div class="col-md-12 ">
                                <input name="subject" type="text" class="form-control in-lab" placeholder="Asunto" required>
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" class="form-control in-lab" rows="6" placeholder="Mensaje" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <input name="submit" type="submit" class="btn in-lab font-strong" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
                    <h4 class="font-strong">Oficina</h4>
                    <p>John lake park 9/12 street park London</p>
                    <h4 class="font-strong">Celular</h4>
                    <p>+57 333 111444</p>
                    <h4 class="font-strong">Correo</h4>
                    <p>santiago@ejemplo.com</p>
                    <h4 class="font-strong">Hogar</h4>
                    <p>14 Tottenham Road, London, England.</p>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondres%2C%20Reino%20Unido!5e0!3m2!1ses!2sco!4v1568101224298!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
    </section>
@endsection
