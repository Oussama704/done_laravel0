@extends('layout')

@section('content')
<body>
<div class="signup-form">
    <form action="{{route('register')}}" method="post">
    @csrf
		<h2>Inscrire</h2>
		<p class="hint-text">Bonjour !</p>
        <div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Nom et prénom" required="required">
            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer le Mot de passe" required="required">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> j'accepte <a href="#">les termes d'utilisations</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Inscrire !</button>
        </div>
        <div class="form-group" >
            <button type="submit" class="btn btn-success btn-lg btn-block">Inscrire avec facebook</button>
            
        </div>
            <div class="text-center">Avez vous un compte? <a href="route">Connexion</a></div>

    </form>
</div>
@endsection
