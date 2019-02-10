@extends('layouts.master')
@section('content')
	<div>
		<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">Chose Class</button>
	</div>
	 <form method="post" action="{{ url('/view-attendence') }}">
	<div class="col-md-3" style="margin-left: 10%;margin-top: 3%;">
		{{csrf_field()}}
							<div class="form-group" >
								<label for="commune">Class</label><br>
								<select style="margin-top: 0%;height:35px;" name="class" required >
									  <option>KG</option>
									  <option>KG1</option>
									  <option>One</option>
									  <option>Two</option>
									  <option>Three</option>
									  <option>Four</option>
									  <option>Five</option>
									  <option>Six</option>
									  <option>Seven</option>
									  <option>Eight</option>
									  <option>Nine</option>	
									  <option>Ten</option>
								</select>
							</div>
	</div>

						<div class="col-md-3" style="margin-top: 3%;">
							<div class="form-group" >
								<label for="province" >Section</label><br>
								<select style="margin-top: 3%;height:35px;" name="section" required >
									  <option>A</option>
									  <option>B</option>
									  <option>C</option>
								</select>
							</div>
						</div>
						<div class="col-md-3" style="margin-top: 3%;">
							<div class="form-group" >
								<label for="province" >Date</label><br>
								<select style="margin-top: 3%;height:35px;" name="date" required >
									@foreach($data as $d)
									  <option> {{$d->attendence_date}} </option>
									@endforeach
								</select>
							</div>
						</div>
	<div>
		<button type="submit" class="btn btn-primary" style="margin-left: 42%; margin-top: 4%;">Show Attendence Sheet</button>
	</div>
	</form>
@endsection