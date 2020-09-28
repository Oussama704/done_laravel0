<!DOCTYPE html>
<html>
<title>Done</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/annonce.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body style="background-color:#f2f2f2">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">

  <a href="{{route('post.index')}}" class="w3-bar-item w3-button"><b>Don</b> Ner</a>
 
  

 
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
    @guest
      <a href="{{route('post.create')}}" class="w3-bar-item w3-button">Poster une annonce</a>
      <a href="{{route('login')}}" class="w3-bar-item w3-button">Connecter</a>
      <a href="{{route('register')}}" class="w3-bar-item w3-button">Créer un compte</a>
    @else
    <a href="{{route('post.create')}}" class="w3-bar-item w3-button">Poster une annonce</a>
      <a href="{{route('Mpost.show',['Mpost'=>Auth::user()->id])}}" class="w3-bar-item w3-button">{{Auth::user()->name}}</a>
      <a href="{{route('login')}}" class="w3-bar-item w3-button"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout<form method="POST" action="{{route('logout')}}" id="logout-form">@csrf</form></a>

    @endguest
    </div>
  </div>
</div>

<!-- Header -->

<br>
<br>
<br>
<!-- Page content -->
<div style="margin:auto 10%">

  <!-- Project Section -->
  <div style=" height:100px;border-radius: 10px; padding:30px;background-color:white;margin:0 10%">
<form method="get" action="{{route('posts.index')}}"style="margin-left:30%">

  <div style="display: inline-block;"><label>Catégorie :</label></div>
  <div style="width: 15%;display: inline-block;">
<select name="categorie"  class="form-control">
  <option name="categorie" value="---">---</option>
  <option name="categorie" value="Immobilier">Immobilier</option>
  <option name="categorie" value="Electronique">Electronique</option>
  <option name="categorie" value="Autres">Autres</option>
</select>
</div>
<div style="display: inline-block;"><label>Ville :</label></div>
<div style=" width: 15% ;display: inline-block;">
<select class="form-control" >
  <option name="ville" value="---">---</option>
  <option name="ville" value="Casablanca">Casablanca</option>
  <option name="ville" value="Marrakech">Marrakech</option>
  <option name="ville" value="Rabat">Rabat</option>
</select>
</div>

<input type="submit" class="btn btn-primary" value="Rechercher"/>

</form>
</div>
 
@yield('content')
<br><br><br>
<div class="w3-container w3-padding-32 w3-white" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border form-control" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border form-control" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border form-control" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border form-control" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section btn btn-primary" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  

<!-- Footer -->
<div style="width:100%">
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <span class="w3-hover-text-green">Oussama Arifallah</span></p>
</footer>
</div>

</body>
</html>
