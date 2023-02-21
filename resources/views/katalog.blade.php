@extends('layouts.app')

@section('content')

<center>
    <style type="text/css">
    .container{
        display: flex;
        justify-content: center;
        gap: 20px;
        
    }
    </style>
    <div class="container">
<div class="card" style="width: 18rem;">
    <img src="../resources/views/img/nintendo-switch-lite-coral.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Нинтендо свитч</h5>
      <p class="card-text">В розовом цвете, память 64гб</p>
      <a href="#" class="btn btn-primary">18800</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="../resources/views/img/roblox-best-games-roblox-main-promo-image.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Компьютерная игра </h5>
      <p class="card-text">Игра на диске </p>
      <a href="#" class="btn btn-primary">500р</a>
    </div>
  </div>
    </div>
  @endsection