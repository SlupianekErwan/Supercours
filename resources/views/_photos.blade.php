<div class="box">

	@foreach($photos as $p)

	<div class="rectangle9">

		<a href="/users/{{$p->user->id}}"><img class="profil" src="{{$p->user->avatar}}"/></a>

		<img class="rectangle10" src="{{$p->url}}">
		
		<div class="filters">
			<div class="category">{{$p->category}}</div>
			<div class="level">{{$p->level}}</div>
		</div>

		<div class="titre">
			<span class="title">{{$p->title}}</span>
		</div>

		@auth
			<div class="bouton"><a href="{{$p->lesson}}" download>Télécharger</a></div>
		@endauth

	</div>

	@endforeach

</div>