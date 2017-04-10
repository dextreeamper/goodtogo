
@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>{{ $card->title }}</h1>
			<ul class="list-group">
				@foreach ($card->notes as $note)
					<li class="list-group-item">{{ $note->body }}
						<a href="#"><span class="glyphicon glyphicon-remove-circle"></span></a>
						<a href="/notes/{{ $note->id }}/edit"><span class="glyphicon glyphicon-edit"></span></a>
					</li>
				@endforeach
			</ul>

			<hr>
			<h1>Add a New Note</h1>

			<form method="POST" action="/cards/{{ $card->id }}/notes">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- token error csrf security -->
				<div class="form-group">
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Note</button>
				</div>
			</form>

			<a href="/cards/">Back</a>

		</div>
	</div>
@stop