@extends("layout")

@section("content")

	<div class=e147_272>
	  <div class="e58_1090"></div>
	  <img class="e58_1088" src="{{$user->avatar}}"/>	
	  <span class="e68_271">
	  		{{$user->name}} {{$user->surname}}
	  		<br/>
	  		<span class="return_in_ligne values">
			  	<b>{{$user->photos()->count()}}</b> <span style="opacity: 0.8;">Cours mis en ligne</span>
				<b>{{$user->IFollow()->count()}}</b> <span style="opacity: 0.8;">Vous suivez</span>
				<b>{{$user->theyFollowMe()->count()}}</b> <span style="opacity: 0.8;">Vous suivent</span>
		  	</span>
		  	<div class="follow">
			  	@if(Auth::id() != $user->id)
					@if(Auth::user()->IFollow->contains($user->id))
						<a href="/follow/{{$user->id}}"><img src="/images/fav_r.png"/></a><br/>
					@else
						<a href="/follow/{{$user->id}}"><img src="/images/fav.png"/></a><br/>
					@endif
				@endif
			</div>
		</span>
	</div>

@if(Auth::id() != $user->id)
    <div class="display_flex_column" style="display: flex;">
        @if ($user->IFollow->isEmpty())
            <p>Aucun utilisateur suivi pour le moment.</p>
        @else
            @foreach ($user->IFollow as $s)
                <div class="suivre">
                    <h1> {{$user->name}} {{$user->surname}} suit également</h1>
                    <a href="/users/{{$s->id}}"><img class="suivis" src="{{$s->avatar}}"/></a><br>
                    <a class="follow_name" href="/users/{{$s->id}}">{{$s->name}} {{$s->surname}}</a>
                </div>
            @endforeach
        @endif
    </div>
@else
    <div class="display_flex_column" style="display: flex;">
        @if (Auth::user()->IFollow->isEmpty())
            <p>Vous ne suivez aucun utilisateur pour le moment.</p>
        @else
            @foreach (Auth::user()->IFollow as $s)
                <div class="suivre">
                    <h1> Vous suivez </h1>
                    <a href="/users/{{$s->id}}"><img class="suivis" src="{{$s->avatar}}"/></a><br>
                    <a class="follow_name" href="/users/{{$s->id}}">{{$s->name}} {{$s->surname}}</a>
                </div>
            @endforeach
        @endif
    </div>
@endif

@if(Auth::id() != $user->id)
	@if($user->photos->isEmpty())
		<p>Aucune photo n'a été mise en ligne.</p>
	@else
		<h1 class="voscours">{{$user->name}} {{$user->surname}} a publié </h1>
		@include("_photos", ["photos" => $user->photos])
	@endif
@else
	@if($user->photos->isEmpty())
		<p>Aucune photo n'a été mise en ligne.</p>
	@else
		<h1 class="voscours">Vous avez mis en ligne </h1>
		@include("_photos", ["photos" => $user->photos])
	@endif
@endif

@endsection