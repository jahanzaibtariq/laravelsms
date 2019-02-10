@extends('layouts.master')
@section('content')
	<a href="{{url('/teacherForm')}}">
	<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">Add Teacher</button>
	</a>




<div class="panel-body">
	<table class="table  table-condensed table-hover table-striped table-bordered ">
		<thead>
			<th> ID </th>
			<th> First Name </th>
			<th> Last Name </th>
			<th> Specialization </th>
			<th> Phone </th>
			<th> Email </th>
			<th> City </th>
			<th> Action</th>
		</thead>
		<tbody>
			@foreach($d as $l)
			<tr>
			<td> {{$l->id}} </td>
			<td> {{$l->firstname}} </td>
			<td> {{$l->lastname}} </td>
			<td> {{$l->specialization}} </td>
			<td> {{$l->phone}} </td>
			<td> {{$l->email}} </td>
			<td> {{$l->city}} </td>
			<td>
				<a href="/editTeacher/{{$l->id}}" class="btn btn-info">View/Edit</a>
				<a href="/deleteTeacher/{{$l->id}}" class="btn btn-danger">delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>





	</table>

@endsection