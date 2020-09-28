@extends('layout')
@section('content')
<h3 class="titre">Vos Postes</h3>

<h3 class="ligne titre"></h3>
<br>
<div style="margin-right: 30%">

  <!-- Project Section -->
  @forelse($posts as $post)
  <a href="{{route('Mpost.edit',['Mpost'=>$post->id])}}"style="text-decoration: none;color:black">
<div class="carte1">
  <div>
  <div height="250px">
  <p style="float: left">
  <img src="{{asset('images/'.$post->image)}}" width="100px" height="100px">
  </p>
</div>
  <div style="display: inline-block; margin-left: 20px">
  <p style="line-height:40px;">
    {{$post->titre}}
  </p>
  <p> {{$post->description}}</p>
  <p>Mise à jour : {{$post->updated_at}}</p>
  </div>
</div>
<form method="post" action="{{route('Mpost.destroy',['Mpost'=>$post->id])}}">@csrf @method('DELETE')<input type="submit" value="Supprimer" name="supprimer" class="button_show" style="margin-left: 20px"/></form>
</div>
</a>
<br><br><br>
@empty
<h2>No Post</h2>
@endforelse


  <!-- About Section -->
  



<!-- End page content -->
</div>
@endsection