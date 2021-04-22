	
@extends('layout')



@section('content')

<div class="container">


			<div class="container-fluid">
			<h1 class="text-center text-capitalize pt-5"> Your Day</h1>
			<h5 class="text-center">this is where you make "Your Day" memorable</h5>
			<hr class="w-25 mx-auto pt-5">
			</div>	
			<label for="">Hows your day today??</label> <br>
<a class="btn btn-primary btn-lg mt-2" href="/journals/create" role="button">Add your daily Stat.. </a>
<hr>




<table class="table table-bordered table-striped">
	<tr>
		<th width="65%">Journal Date</th>
		
		<th width="15%">Delete</th>
        
	
	
	</tr>
	@foreach ($journals as $journal)
		<tr>
			<td><a href="/journals/{{$journal->id}}">
	{{$journal->date}}
	</a></td>
			
			
			<td>
			<form action="/journals/{{$journal->id}}" method="POST">
			@method('DELETE')
			@csrf
			<button type="submit" class="btn btn-primary btn-lg">Delete</button>
			</form></td>
		

		</tr>
	@endforeach
	
	
</table>





<hr>
</div>

@endsection 