@extends('layout')

@section('content')

	<div class="container">
	<h1 class="type">{{ $journal->date }}</h1>

	<div class="content">
	<label for="day" class="text-success">Description of your day:</label>

		{{ $journal->description}}

	<p>
		<a href="/journals/{{ $journal->id}}/edit">Edit</a>
	</p>
	<form method="POST" action="/journals/{{$journal->id}}/todays" class="box">
	@csrf 
	<div class="field">
		<label class="label" for="mood">Mood for the day:</label>
		
		<div class="control">
			<input type="text" class="form-control" name="mood" placeholder="Is it happy,sad,satisfactory,productive......" required>			
		</div>
	</div>



<div class="field">
		<label class="label" for="temp">Temperature in celcius (ºC):</label>
		
		<div class="control">
			<input type="text" class="form-control" name="temp" placeholder="Temperature" required>			
		</div>
	</div>




	<div class="form-group">
    <label for="todays_description">Your Daily Stat for the day:</label>
    <textarea class="form-control" id="todays_description" rows="3" name="todays_description" placeholder="Hows your day today???" required></textarea>
  </div>


	<div class="field">
		<div class="control">
			<button type="submit" class="btn btn-primary mt-2">Submit result</button>
			
		</div>
	</div>


@include('errors')

</form>

	</div>
	<hr>
	
	@if ($journal->today->count())	
<table class="table table-bordered table-striped">
<tr>
		<th width="10%">Journal Date</th>
		<th width="10%">Mood</th>
		
		<th width="5%">Temperature</th>
		<th width="65%">Journal </th>
		
		
        
	
	
	</tr>
	
	@foreach($journal->today as $type)
		<tr>
	
			<td>{{ $type->created_at}}</td>
			<td>{{ $type->mood}}</td>
			<td>{{ $type->temp}}</td>
			<td>{{ $type->todays_description}}</td>
			
		
		</tr>

	@endforeach
	
</table>
@endif

</div>

@endsection