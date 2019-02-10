@extends('layouts.master')
@section('content')

<style type="text/css">
.student-photo{
	height: 160px;
	padding-left: 1px;
	padding-right: 1px;
	border: 1px solid #ccc;
	background: #eee;
	width: 140px;
	margin: 0 auto;
}

.photo > input[type='file']{
	display: none;
}
.photo{
	width: 30px;
	height: 30px;
	border-radius: 100%;

}
.student-id{
	background-repeat: repeat-x;
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background:#eee;
	border-bottom: 1px solid #ccc;
}
.btn-browse{
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background:#eee;
	border: none;
	border-top: 1px solid #ccc;

}
fieldset{
	margin-top: 5px;

}
fieldset legend{
	display: block;
	width: 100%;
	padding: 0px;
	font-size: 15px;
	line-height: inherit;
	color: #797979;
	border: 0;
	border-bottom: 1px solid #e5e5e5;

}




</style>


<div class="row">
	
	<div class="col-lg-12" style="text-align: center;">
		<h3 class="page-header"><i class="fa fa-file-text-o"></i>  Shedule Class</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default" >
			@foreach($data as $d)
			<div class="panel-body" style="padding-bottom: 4px">
				<form action="/update-shedule/{{$d->id}}" method="POST" id="form-create-student" enctype="multipart/form-data">
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div>
								{{-------------Class Name----------}}

								<div class="col-md-2">
									<div class="form-group" >
										<label for="lastname">Class Name</label>
										{{csrf_field()}}
					
										<input type="text" name="class" id="first_name" class="form-control" required value="{{$d->class}}">
									</div>
								</div>
								<div class="col-md-1">
									<div class="form-group" >
										<label for="lastname">Lec 1</label>
										<input type="text" name="lec1" class="form-control" required value="{{$d->lec1}}">
									</div>
								</div>
								<div class="col-md-1">
									<div class="form-group" >
										<label for="lastname">Lec 2</label>
										<input type="text" name="lec2" class="form-control" required value="{{$d->lec2}}">
									</div>
								</div>
								<div class="col-md-1">
									<div class="form-group" >
										<label for="lastname">Lec 3</label>
										<input type="text" name="lec3" id="last_name" class="form-control" required value="{{$d->lec3}}">
									</div>
								</div>
								<div class="col-md-1">
									<div class="form-group" >
										<label for="lastname">Lec 4</label>
										<input type="text" name="lec4" id="last_name" class="form-control" required value="{{$d->lec4}}">
									</div>
								</div>
								<div class="col-md-1">
									<div class="form-group" >
										<label for="lastname">Lec 5</label>
										<input type="text" name="lec5" id="last_name" class="form-control" required value="{{$d->lec5}}">
									</div>
								</div>
								<div class="col-md-1">
									<div class="form-group" >
										<label for="lastname">Lec 6</label>
										<input type="text" name="lec6" id="last_name" class="form-control" required value="{{$d->lec6}}">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group" >
										<label for="lastname">Lec 7</label>
										<input type="text" name="lec7" id="last_name" class="form-control" required value="{{$d->lec7}}">
									</div>
								</div>
								<div class="col-md-1">
									<div class="form-group" >
										<label for="lastname">Lec 8</label>
										<input type="text" name="lec8" id="last_name" class="form-control" required value="{{$d->lec8}}">
									</div>
								</div>
								<div class="col-md-1">
									<div class="form-group" >
										<label for="lastname">Lec 9</label>
										<input type="text" name="lec9" id="last_name" class="form-control" required value="{{$d->lec9}}">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<button value="submit" style="margin-left: 40%;" class="btn btn-default btn-save">Update <i class="fa fa-save"></i></button>
				</div>
			</form>
		</div>
		@endforeach
	</div></div></div>
@endsection