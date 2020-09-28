@extends('layout')
@section('content')

<div style="margin:auto 10%">

  <!-- Project Section -->
<h3>Electronique ({{$elect}})</h3>
<br>
<p style="border-bottom:1px solid"></p>
@foreach($posts as $post)
@if(strcmp($post->categorie,"Electronique")==0)
<a href="{{route('post.show',['post'=>$post->id])}}"style="text-decoration: none;color:black">
<div class="carte" >
  <div>
  <div height="100px">
  <p style="float: left">
  <img src="{{asset('images/'.$post->image)}}" width="100px" height="90px">
  </p>
</div>
  <div style="display: inline-block; margin-left: 20px">
  <p style="line-height:40px;">
    {{$post->titre}}
  </p>
  <p> {{$post->description}}</p>
  <p style="color:rgb(128, 255, 212)">{{$post->created_at}}</p>
  </div>
</div>
</div>
</a>

<br>
@endif
@endforeach

<h3>Immobilier ({{$immob}})</h3>
<br>
<p style="border-bottom:1px solid"></p>
@foreach($posts as $post)
@if(strcmp($post->categorie,"Immobilier")==0)

<a href="{{route('post.show',['post'=>$post->id])}}"style="text-decoration: none;color:black">
<div class="carte" >
  <div>
  <div height="150px">
  <p style="float: left">
  <img src="{{asset('images/'.$post->image)}}" width="100px" height="80px">
  </p>
</div>
  <div style="display: inline-block; margin-left: 20px">
  <p style="line-height:40px;">
    {{$post->titre}}
  </p>
  <p> {{$post->description}}</p>
  <p style="color:rgb(128, 255, 212)">{{$post->created_at}}</p>
  </div>
</div>
</div>
</a>

<br>
@endif
@endforeach
<h3>Autres ({{$autre}})</h3>
<br>
<p style="border-bottom:1px solid"></p>
@foreach($posts as $post)
@if(strcmp($post->categorie,"Autres")==0)

<a href="{{route('post.show',['post'=>$post->id])}}"style="text-decoration: none;color:black">
<div class="carte" >
  <div>
  <div height="150px">
  <p style="float: left">
  <img src="{{asset('images/'.$post->image)}}" width="100px" height="80px">
  </p>
</div>
  <div style="display: inline-block; margin-left: 20px">
  <p style="line-height:40px;">
    {{$post->titre}}
  </p>
  <p> {{$post->description}}</p>
  <p style="color:rgb(128, 255, 212)">{{$post->created_at}}</p>
  </div>
</div>
</div>
</a>

<br>
@endif
@endforeach

  <!-- About Section -->
  



<!-- End page content -->
</div>
@endsection