@extends('layout')

@section('content')

<h1 class="container">Edit "Your Day"</h1>

<div class="container">
<form method="POST" action="/journals/{{$journal->id}}" style="margin-bottom: 0.8em">
	@method('PATCH')
	@csrf
	<div class="field">
		<label class="label" for="date">Luxury Type</label>
			<div class="control">
			<input type="text" class="form-control" name="date" placeholder="Car's Luxury Type" type="date" value="{{ $journal->date}}">
			</div>
	</div>

	<div class="field">
		<label class="label" for="description">Description of a luxury type</label>
		<div class="control">
		<textarea name="description" class="form-control" row="3">{{ $journal->description}}</textarea>
	</div>
		</div>

<div class="field">
	<div class="control">
		<button type="submit" class="btn btn-primary mt-2" >Update </button>
		
	</div>
</div>

</form>


<form method="POST" action="/journals/{{$journal->id}}">
	@method('DELETE')
	@csrf
	{{csrf_field()}}
	<div class="field">
	<div class="control">
		<button type="submit" class="btn btn-primary">Delete </button>
		
	</div>
</div>
</form>
</div>
@endsection