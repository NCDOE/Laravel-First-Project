@extends('Layout')
@section('Content')
<!-- Footer -->
			<footer id="footer">
				

					<h2>Add your Review</h2>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Enter Your Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						
						<div class="field">
							<label for="message">Enter Your Comment</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type=""></li>
						</ul>
					</form>

					
			</footer>
			@endsection('Content')