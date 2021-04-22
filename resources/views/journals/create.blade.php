@extends('layout')

@section('content')
<h1 class="container text-center ">Make "Your Day" memorial </h1>
<div class="container">
	<form method="POST" action="/journals">
	@csrf
	<div class="form-group">
		<label  for="date" >Enter the date today???</label>

	
		<input type="date" placeholder= "Today's date" class="form-control w-25 {{ $errors->has('date')? 'is-danger': ''}}" name="date" value="{{old('date')}}" required>	
	
	</div>

	<div class="form-group">
		<label class="label" for="description">Description </label>
		<div class="control">
			<textarea placeholder=" Enter the Description for today's activity" name="description" class="form-control w-25 {{ $errors->has('description')? 'is-danger': ''}}" required >{{ old('description')}}  </textarea>
		</div>
	</div>

	<div class="field pb-3">
		<div class="control">
			<button type="submit"  class="btn btn-primary">Submit</button>
		</div>
	</div>

	@include('errors')
</form>
</div>
@endsection
