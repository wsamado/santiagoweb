@extends('main')
@section('contenido')
<div id="myCarousel" class="favcar carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Hola, Soy santiago y soy ingeniero de software</h4>
              <p>¿Quieres saber mas de mi?</p>
              <a href="#"></a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/engs.png" id="pngimg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container tag-section">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers">1.020</span>
        <span class="count-name">Seguidores</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-ticket"></i>
        <span class="count-numbers">304</span>
        <span class="count-name">Proyectos Terminados</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">1232</span>
        <span class="count-name">Clientes Satisfechos</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">11</span>
        <span class="count-name">Lenguajes Aprendidos</span>
      </div>
    </div>
  </div>
</div>
@endsection
