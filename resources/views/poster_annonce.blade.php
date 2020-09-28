@extends('layout')
@section ('framework')
<link rel="stylesheet" href="annonce.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

@endsection
@section('content')

<!-- Page content -->
<h3 class="titre">Entrer les informations nécessaires pour votre poste</h3>
<br>

<h3 class="ligne titre"></h3>

<br><br>
<div style="margin-left: 35%">
  
  <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
  @csrf
@include('layout_edit')
</form>
  <br><br>
</div>
@endsection
