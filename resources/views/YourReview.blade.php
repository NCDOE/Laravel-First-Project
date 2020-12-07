@extends('Layout')
@section('Content')
<!-- Footer -->
			<footer id="footer">
				

			<h1>Edit Review</h1>

<form method="POST" action="/Articles">

@foreach($article as $article)
@csrf

	<div class="field">
	<label class="label" for="title">title</label>
		<div class="control">
		<input class="intup" type="text" name="title" id="title" value={{$article->title}}>
	</div>
	</div>

	<div class="field">
	<label class="label" for="captured">captured</label>
	<div class="control">
	
	<textarea class="textarea" name="captured" id="captured">{{$article->captured}}</textarea>
</div>
</div>
<div class="field">
		<label class="label" for="body">Body</label>
		<div class="control">
		<textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
		</div>
	 </div>
  <div class="field is-grouped">
  <div class="control">
  <button class="button is-link" type="submit">Submit</button>
  </div>
</div>
@endforeach
					
			</footer>
			@endsection('Content')