
@extends('Layout')
@section('Content')
	<!-- One -->
	@foreach($articles as $article)
	<section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>{{$article->title}}</h2>
							<p>{{$article->captured}}</p>
						</header>
						<div class="content">
							<p>{{$article->body}}</p>
						</div>
						<footer>
						
						</footer>
					</article>
				</div>
				
					
			</section>
			@endforeach

			@endsection('Content')