@extends("layout")

@section("content")

	@include("errors")

	<div class="e113_272">
  		<div class="e51_193"></div><span class="e51_169">Mettre un cours en ligne</span>
	</div>


	<div class="e52_200">
		<form method="post" action="/photos/store" enctype="multipart/form-data">
			@csrf
			<input class="e51_171" type="text" name="title" value="{{old('title')}}" required placeholder="Nom du cours"/><br/>
			<input class="e51_172" type="text" name="categorie" value="{{old('title')}}" required placeholder="Catégorie(s)"/><br/>
			<input class="e51_172_2" type="text" name="niveau" value="{{old('title')}}" required placeholder="Niveau(x)"/><br/>
			<!-- <input type="text" name="url" value="{{old('url')}}" required placeholder="L'url"/><br/> -->
			<div class="e52_1999">
				<label class="e51_173" for="file" class="label-file"><span class="e51_173_2">Illustration</span><img class="upload_pdf" src="/images/upload.png"/></label>
				<input id="file" class="e51_173" type="file" required name="image"><br/>
			</div>
			<div class="e52_199">
				<label class="e51_173" for="file" class="label-file"><span class="e51_173_2">Cour (pdf)</span><img class="upload_pdf" src="/images/upload.png"/></label>
				<input id="file" class="e51_173" type="file" required name="cours"><br/>
			</div>
			<button class="e71_1795" type="submit"><span class="ei71_1795_71_1468">Mettre en ligne</span></button><br/>
		</form>
	</div>

@endsection