@extends('layouts.master')
@section('content')
	<a href="{{url('/studentForm')}}">
		<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">Add Student</button>
	</a>
	<form action=" {{url('/searchStudent')}} " method="post"> 
		{{csrf_field()}}
		<input type="text" style="margin-left: 80%; margin-top: 2%;" name="text">
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
	</form>
<div class="panel-body">
	<table class="table  table-condensed table-hover table-striped table-bordered ">
		<thead>
			<th> ID </th>
			<th> First Name </th>
			<th> Last Name </th>
			<th> Father Name </th>
			<th> Father Phone No</th>
			<th> Province </th>
			<th> City </th>
			<th> Action</th>
		</thead>
		<tbody>
			@foreach($d as $l) 
			<tr>
				<td> {{$l->id}} </td>
				<td> {{$l->firstname}} </td>
				<td> {{$l->lastname}} </td>
				<td> {{$l->fathername}} </td>
				<td> {{$l->phone}} </td>
				<td> {{$l->province}} </td>
				<td> {{$l->city}} </td>
				<td>
					<a href="/editStudent/{{$l->id}}" class="btn btn-info">View/Edit</a>
					<a href="/deleteStudent/{{$l->id}}" class="btn btn-danger">delete</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<div class="" style="margin-left: 80%;">
			{{$d->links()}}
	</div>
@endsection