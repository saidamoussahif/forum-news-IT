
@extends('layouts.app')
  
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Styles -->
     <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('')}}" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/dog.jpg')}}" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/dog.jpg')}}" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="card">
  <div class="card-body">
   <p> This is some text within a card body.
    This is some text within a card body.
    This is some text within a card body.
    This is some text within a card body.
    This is some text within a card body.</p>
    <button class="btn btn-primary"></button>
  </div>
</div>
    
    
</body>
</html>

@endsection