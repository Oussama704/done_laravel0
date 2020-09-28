@extends('layout')
@section('content')


<!-- Page content -->
<h3 class="titre">Modifer les informations nécessaires pour votre poste</h3>
<br>

<h3 class="ligne titre"></h3>

<br><br>
<div style="margin-left: 35%">
  
  <form action="{{route('Mpost.update',['Mpost'=>$post->id])}}" method="post"  enctype="multipart/form-data">
  @csrf
  @method('PUT')
@include('layout_edit')
</form>
  <br><br>
</div>
@endsection
