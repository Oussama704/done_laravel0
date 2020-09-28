@extends('layout')
<!-- Header -->

@section('content')
<!-- Page content -->
<div style=" background-color:white;margin: 10%;height: 520px;border-bottom: solid 1px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">

  <!-- Project Section -->
 

<div style="height: 180px;" >
  <div>
  <div height="150px">
  <p style="float: left">
  <img src="{{asset('images/'.$post->image)}}" width="180px" height="150px">
  </p>
</div>
  <div style="display: inline-block; margin-left: 120px">
  <h2 style="line-height:40px;">
    <span class="fas fa-archive"></span><span> {{$post->titre}}</span><span style="margin-left: 50px;color:rgb(128, 255, 212)">{{$post->created_at->diffForHumans()}}</span>
  </h2>
  <p style="border-bottom:1px solid black"></p>
  <h3><span class="fa fa-align-justify"></span> {{$post->description}}</h3>
  <p style="border-bottom:1px solid black"></p>

  <br>
  <h3> {{$post->categorie}}</h3>
  <p style="border-bottom:1px solid black"></p>

  <br>
  <h4><span class="fas fa-user-alt"></span><span> {{$post->nom_pre}} </span><span style="margin-left: 50px"><span>&#9993;</span> {{$post->email}}</span></h4>
  <p style="border-bottom:1px solid black"></p>

  <br>
  <h4><span>&#9743;</span> {{$post->num_tele}}</h4>
  <p style="border-bottom:1px solid black"></p>

  
  
  <br>
  <h4><span class='fas fa-city'></span><span> {{$post->ville}}</span><span  style="margin-left: 50px"> <span class="fa fa-map-marker"></span>  {{$post->location}}</span></h4>
  <p style="border-bottom:1px solid black"></p>

  
 

  </div>
</div>
</div>
<br>
<br>
<br>
<br>

  <!-- About Section -->
  



<!-- End page content -->
</div>
@endsection
  <!-- About Section -->
  



<!-- End page content -->
