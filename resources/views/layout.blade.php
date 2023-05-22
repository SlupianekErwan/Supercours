<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monprojet</title>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<header class="container">

  <nav>

    @auth
        <div class=e65_815>
        <a href="/"><div class="ei65_815_33_487"></div></a>
        <div class=ei65_815_33_492>
<!--         <a href="/article/1">Article 1</a> -->
        <a href="/photos/create" class="ei65_815_33_488">Ajouter un cours</a>
        <a href="/users/{{Auth::user()->id}}" class="ei65_815_33_489">Mon compte</a>
        <a href="#" onclick="document.getElementById('myform').submit()" class="ei65_815_33_491">Déconexion</a>
        <form id="myform" style="display: none;" action="/logout" method="post">
          @csrf
          <input type="submit" value="Déconexion">
        </form>
        </div>
      </div>
    @else
    <div class=e65_815>
        <a href="/"><div class="ei65_815_33_487"></div></a>
        <div class=ei65_815_33_492>
        <a href="/register" class="ei65_815_33_588">S'inscrire</a>
        <a href="/login" class="ei65_815_33_589">Se connecter</a>
        </div>
      </div>
    @endauth

  </nav>

  <div class="ei33_386_33_372"></div>

</header>

<main class="container">

  <section>

    <div>
      @yield("content")
    </div>

  </section>

</main>

<footer class="container">

  <div class=e58_1160>
    <div class="ei33_386_33_372"></div>
    <span  class="ei58_1160_33_373">Projet fictif réalisé par Rémi Leemann et Erwan Suplianek - 2023 LP Créaweb</span>
  </div>

</footer>

<script src="assets/js/dev/script.js"></script>
</body>
</html>