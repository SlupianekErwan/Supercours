	<!doctype html>
	<html lang="fr">
	<head>
	  <link rel="stylesheet" href="/css/style.css">
	</head>
	<body class="e38_174">

	@include("errors")

	<div class="e38_201">

	<a href="/home"><div class="e38_175"></div></a>

	<span class="e38_176">Inscription</span>

	<form class="form_connect" method="post" action="/register">
		@csrf
		<input type="text" name="name" required placeholder="Nom"/><br/>
		<input type="text" name="surname" required placeholder="Prénom"/><br/>
		<input type="email" name="email" required placeholder="Adresse email"/><br/>
		<input type="password" name="password" required placeholder="Mot de passe"/><br/>
		<input type="password" name="password_confirmation" required placeholder="Confirmez mot de passe"/><br/>
		<input type="text" name="avatar" value="{{old('url')}}" required placeholder="URL Photo de profil"/><br/>
<!-- 		<label for="file" class="label-file e70_378"><span class="ei70_378_38_137">Photo de profil</span><img class="upload_avatar" src="/images/upload.png"/></label> -->
<!-- 		<input id="file" type="file" required name="avatar"><br/> -->
		<button class="btn_register" type="submit">S'inscrire</button><br/>
	</form>

	<div class=e38_222><span class="e38_233">Ou</span></div>

	<a class="goToconnect" href="/login">Se connecter</a>

	<span class="e38_188">Votre apprentissage commence ici !</span>
	
	</div>

	</body>
	</html>