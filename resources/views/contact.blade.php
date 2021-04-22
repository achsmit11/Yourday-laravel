@extends('layout')

@section('title','Contact Us')

@section('content')




<section class="bg-success">
  <article class="py-5 text-center text-white bg-success">
  <button class="btn btn-info">Contact Us</button>
    <div>
      <h3 class="display-4">www.<i>yourday</i>.com</h3>
      <p>Feel Free to contact us and give us the feedback</p>
     
    </div>
  </article>
</section>

  </section>

  <section class="container mt-2" >
  
  <div class="row mb-2 ">

    <div class="col-lg-4 ">
      <div class="card" >
          <img class="card-img-top" src="images/1.jpg" alt="Card image">
          <div class="card-body">
              <h4 class="card-title"> About Journaling</h4>
              <p class="card-text">Journaling is the process of.......</p>
               <a href="/about" class="btn btn-primary">Read More</a>
          </div>
      </div>
    </div>
    
    <div class="col-lg-4">
      <div class="card" >
          <img class="card-img-top" src="images/2.jpg" alt="Card image">
          <div class="card-body">
              <h4 class="card-title">What is Journaling?</h4>
              <p class="card-text">Journaling is a vehicle of  ......</p>
               <a href="/about" class="btn btn-primary">Read More</a>
          </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card" >
          <img class="card-img-top" src="images/3.jpg" alt="Card image">
          <div class="card-body">
              <h4 class="card-title">Why Journaling?</h4>
              <p class="card-text">Journaling can be fun. Writing about......</p>
               <a href="/about" class="btn btn-primary">Read More</a>
          </div>
      </div>
    </div>

  </div>
</section>



@endsection

