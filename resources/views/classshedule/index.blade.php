@extends('layouts.master')
@section('content')
	<a href="{{url('/sheduleForm')}}">
		<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">Add Shedule</button>
	</a>


<div class="panel-body">
	<table class="table  table-condensed table-hover table-striped table-bordered ">
		<thead>
			<th> Class Name </th>
			<th> Lec 1 </th>
			<th> Lec 2 </th>
			<th> Lec 3 </th>
			<th> Lec 4 </th>
			<th> Lec 5 </th>
			<th> Lec 6 </th>
			<th> Lec 7 </th>
			<th> Lec 8 </th>
			<th> Lec 9 </th>
			<th> Action</th>
		</thead>
		<tbody>
			@foreach($data as $d)
			<tr>
			<td> {{$d->class}} </td>
			<td> {{$d->lec1}} </td>
			<td> {{$d->lec2}} </td>
			<td> {{$d->lec3}} </td>
			<td> {{$d->lec4}} </td>
			<td> {{$d->lec5}} </td>
			<td> {{$d->lec6}} </td>
			<td> {{$d->lec7}} </td>
			<td> {{$d->lec8}} </td>
			<td> {{$d->lec9}} </td>
			<td>
				<a href="/editShedule/{{$d->id}}" class="btn btn-info">View/Edit</a>
				<a href="/deleteShedule/{{$d->id}}" class="btn btn-danger">delete</a>
			</td>
			</tr>
			@endforeach
		</tbody>





	</table>
@endsection