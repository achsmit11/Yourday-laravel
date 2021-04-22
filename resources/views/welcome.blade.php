@extends('layout')

@section('title', 'Home')


@section('content')
<div id="carouselExampleIndicators" class="carousel slide mx-2" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="w-100 h-100">
  <div class="carousel-inner " >
    <div class="carousel-item active ">
      <img class="d-block w-100" src="images/1.jpg" alt="First slide" >
    </div>
    <div class="carousel-item ">  
      <img class="d-block w-100" src="images/2.jpg" alt="Second slide" >
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="images/3.jpg" alt="Third slide" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section>
  <div class="row  mx-1">

    <div class="col-lg-6">
      <img src="images/3.jpg" class="img-fluid">
      
    </div>

    
    <div class="col-lg-6">
     <h1>This is Journaling</h1>
     <p>Journaling is a vehicle of emotional exploration, a way to channel difficult feelings into healthy and creative outcomes. It is a form of free self-expression that leads to exploration and personal growth. By writing down your thoughts and feelings, you are forced to slow down and pay attention to everything that is going on in your life. You have to listen rather than run away from your feelings. Writing has a lot in common with art. Just like a painter uses a canvas, an author uses a blank piece of paper or computer screen. Just like the painter chooses from a palette of color, the author chooses from a palette of words and expressions. Just like a painter uses a brush to stroke his or her ideas to life, the author uses the stroke of a key pad or the inscription of a pen to open a window to the soul. And when that window opens, healing can begin.  </p>
      
    </div>
    
  </div>

</section>




@endsection


