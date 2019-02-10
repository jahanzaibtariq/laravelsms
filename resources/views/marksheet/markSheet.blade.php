@extends('layouts.master')
@section('content')
	<div>
		<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">Mark Student No </button>
	</div>
	<form action=" {{ url('/save-marksheet') }} " method="post">
		{{csrf_field()}}
		<div  style="text-align: center;margin-left: 38%; margin-top: 2%;
		margin-right: 40%;">
		</div>
		<br>
		<div class="col-md-3" style="margin-left: 5%;">
			<table class="table table-border">
				<h4>Term</h4>				
				<div class="col-md-3">
					<div class="form-group" >
						<select style="margin-top: 0%;height:35px;" name="marksheet_name" required id="sections">
							  <option value="1stTerm">1st Term</option>
							  <option value="2ndTerm">2nd Term</option>
							  <option value="FinalTerm">Final Term</option>
						</select>
					</div>
				</div>
				<thead>
					<th>Roll No </th>
					<th>Name</th>
					<th>Obtain Marks</th>
					<th>Total Marks</th>
				</thead>
				<tbody>
					@foreach($d as $l)
						<tr>
							<td>{{$l->roll_no}}</td>
							<td> {{$l->firstname}}</td>
							<td>
							<div class="col-md-3">
								<div class="form-group" >
									<input type="number" name="obtain_mark[]">
								</div>
							</div>
							</td>
							<td>
							<div class="col-md-3">
								<div class="form-group" >
									<input type="number" name="total_mark[]">
								</div>
							</div>
							</td>
						</tr>
							<input type="hidden" name="class" value="{{$l->class}}">
							<input type="hidden" name="roll_no[]" value="{{$l->roll_no}}">
							<input type="hidden" name="firstname[]" value="{{$l->firstname}}">
					@endforeach
				</tbody>
			</table>
		</div>
		<div  style="margin-left: 30%; margin-top:30%;">
		<button type="submit" class="btn btn-primary">Submit Marksheet</button>
		</div>
	</form>	
@endsection