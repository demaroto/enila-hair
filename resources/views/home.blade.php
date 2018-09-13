@extends('principal')
@section('titulo')
Enila Hair - A beleza que inspira.
@endsection
@section('conteudo')


<!-- Content-->


<div class="container">
	<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="https://bs.simplusmedia.com/i/730/6622/hidratacao-ampolas.jpg" alt="...">
    </a>
  </div>
  
   <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="https://www.monsoonsalon.com/blog/wp-content/uploads/2014/06/haircare.jpg" alt="...">
    </a>
  </div>
   <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="https://bs.simplusmedia.com/i/f/o/cabelos/conteudo/vitaminas-minerais-cabelo.jpg" alt="...">
    </a>
  </div>
</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://www.w3schools.com/bootstrap/la.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

@endsection