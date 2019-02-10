<!DOCTYPE HTML>
<html>
<head>
	<title>Jani School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Cube login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Eczar:400,500,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
	<h1>School Management System </h1>
	<div class="w3ls-login">
    <form method="POST" action="{{url('/login')}}">
	
    {{csrf_field()}}
			<div class="w3ls-ribbon">
				<div class="ribbon-wrapper">
					<div class="glow">&nbsp;</div>
					<div class="ribbon-front">
						<h2>Sign In </h2>
					</div>
				</div>
			</div>
			
			@if($errors->any())
				<div class="alert alert-danger">
					<ul>@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
	
			
			
			<div class="agile-field-txt">
				<label>
					Username :</label>
				<input type="text" name="username" placeholder="Username" />
			</div>
			<div class="agile-field-txt">
				<label>
					password :</label>
				<input type="password" name="password" placeholder="Password"  id="myInput" />
				<div class="agile_label">
				</div>
			</div>
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<div class="w3ls-login  w3l-sub">
				<input type="submit" value="Login">
			</div>
		</form>
	</div>
	<div class="copy-wthree">
		<p>All Rights Reserved | Design by
			<a href="" target="_blank">Jahanzaib Tariq</a>
		</p>
	</div>
</body>
</html>