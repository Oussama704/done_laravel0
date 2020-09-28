@extends('layout')

@section('content')
<body>
<div class="signup-form">
    <form action="{{route('login')}}" method="post">
    @csrf
		<h2>Connexion</h2>
		<p class="hint-text">Bonjour !</p>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
        </div>
		     
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Connexion</button>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Connexion avec facebook</button>
        </div>
        
            <div class="text-center">Vous n'avez de compte <a href="{{route('register')}}">Inscrivez-vous</a></div>

    </form>
</div>
@endsection
