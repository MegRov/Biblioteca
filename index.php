<html>
<head>
<!-- head -->
<?php  include "modulos\head.php"?>
</head>
<body>
    
<!-- Navbar -->
<?php include "modulos/nav.php"?>

<!-- end navbar -->

<!-- carrousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="image\carrousel.jpg" class="img-fluid w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>









<!-- cards -->
<div class="container">

  <div class="card-deck">
    <div class="card img-fluid shadow">
      <img src="image\filosofia.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Filosofía</h5>
        <p class="card-text">Mira los autores de los pensamientos más brillantes de la historia.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
    <div class="card img-fluid shadow">
      <img src="image\programacion.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Programación</h5>
        <p class="card-text">Si quieres aprender a programar, aquí te organicé una guía de aprendizaje.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
    <div class="card img-fluid shadow">
      <img src="image\Matematica.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Economía y matematicas</h5>
        <p class="card-text">Si quieres entender como funciona esta ciencia, lee estos autores.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
  </div>

  <div class="card-deck">
    <div class="card img-fluid shadow">
      <img src="image\deporte.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Auto conocimiento</h5>
        <p class="card-text">Conócete, eres muy complejo, fisica y mentalmente.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
    <div class="card img-fluid shadow">
      <img src="image\Lenguaje.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Lenguaje</h5>
        <p class="card-text">No sólo hay una forma de decir algo, aprende a decirlo.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
    <div class="card img-fluid shadow">
      <img src="image\Naturaleza.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Naturaleza</h5>
        <p class="card-text">Se encuentra inmersa en aspectos fundamentales para el ser humano, somos naturaleza.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
  </div>

  <div class="card-deck">
    <div class="card img-fluid shadow">
      <img src="image\musica.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Musica</h5>
        <p class="card-text">No solo son notas, es la capacidad de entenderlas.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
    <div class="card img-fluid shadow">
      <img src="image\book2.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
    <div class="card img-fluid shadow">
      <img src="image\book3.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <a href="#" class="btn btn-primary btn-block">Ver</a>
      </div>
    </div>
  </div>
</div>


<!-- carrusel -->
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Genéro</th>
      <th scope="col">Tema</th>
      <th scope="col">Click</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Educacion </th>
      <td>Programacion</td>
      <td><img src="image\book2.jpg" id="img-table" class="rounded-circle img-responsive" alt="Cinque Terre"> </td>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<!-- scripts -->
<?php include "modulos/script.php";?>
<!-- end scripts -->

</body>
</html>