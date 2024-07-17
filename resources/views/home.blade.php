@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
 
</head>
<body>


      <div class="container">
        <div class="row">
            <div class="col-md-8">

      <div id="carouselExampleFade" class="carousel slide carousel-fade  mx-auto"style="width: 700px; height: 900px;" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets\img\pic2.jpg" class="d-md-inline-block " alt="hi">
          </div>
          <!-- <div class="carousel-item">
            <img src="assets\img\pic6.jpg" class="d-block w-100" alt="hello">
          </div> -->
          <div class="carousel-item">
            <img src="assets\img\pic8.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-md-4">
        <!-- Call-to-Action -->
        <div class="call-to-action text-center my-5">
            <h2>Ready to Dive into Art?</h2>
            <p>Start Your Journey Now</p>
            <a href="{{route('album')}}" class="btn btn-dark">Get Started</a>
        </div>
    </div>
</div>
</div>

</body>
</html>
@endsection