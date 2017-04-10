
@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Edit the note</h1>
			
			<form method="POST" action="/notes/{{ $note->id }}">
				{{ method_field('PATCH') }}

				<input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- token error csrf security -->

				<div class="form-group">
					<textarea name="body" class="form-control">{{ $note->body }}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Update Note</button>
				</div>
			</form>

			<a href="/cards/">Back</a>

		</div>
	</div>
@stop
