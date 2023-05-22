	<!doctype html>
	<html lang="fr">
	<head>
	  <link rel="stylesheet" href="/css/style.css">
	  <link rel="stylesheet" href="/css/media.css">
	</head>
	<body class="e38_174">

	@include("errors")

	<div class="e38_201">

	<a href="/home"><div class="e38_175"></div></a>

	<span  class="e38_176">Connexion</span>

	<form class="form_connect" method="post" action="/login">
		@csrf
		<input type="email" name="email" required placeholder="Adresse email"/><br/>
		<input type="password" name="password" required placeholder="Mot de passe"/><br/>
		<span class="e38_540">Se souvenir de moi</span> <input class="checkbox" type="checkbox" name="remember"><br/>
		<button class="btn_login" type="submit">Se connecter</button><br/>
	</form>

	<div class=e38_202><span class="e38_203">Ou</span></div>

	<a class="goToregister" href="/register">S'inscrire</a>

	<span  class="e38_188">Votre apprentissage commence ici !</span>

	</div>

	</body>
	</html>