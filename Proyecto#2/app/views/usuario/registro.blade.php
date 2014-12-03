<!DOCTYPE html>
<html>
<head>
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}
	{{HTML::style('style/modi.css')}}


</head>
<body id="header" >
	<div id="container" style="height: 550px;">

		<h1 id="title">Registro</h1>

		<div id="letra">
			@if ($errors->has())
			    <div class="alert-danger text-center" role="alert">
			        <small>{{ $errors->first('email') }}</small>
			        <small>{{ $errors->first('password') }}</small>
			        <small>{{ $errors->first('confirm') }}</small>
			        <small>{{ $errors->first('invalid_credentials') }}</small>

			    </div>
			@endif

			<img id="Image1_img" src="style/img/registro.png">

			{{ Form::open(array('url' => 'registro')) }}
				<div style="margin-left: 400px;">
					<label for="email">Email:</label>
				</div>
				<div id="input">
					{{Form::text('email', Input::old('email'), array('placeholder' => 'Email','required' => 'true'))}}
				</div>
				<br>
				<div style="margin-left: 400px">
					<label for="password">Password:</label>
				</div>
				<div id="input">
					{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control','required' => 'true')) }}
				</div>
				<br>
				<div style="margin-left: 400px">
					<label for="confirm">Confirm:</label>
				</div>
				<div id="input">
					{{ Form::password('confirm', array('placeholder' => 'Contraseña', 'class' => 'form-control','required' => 'true')) }}
				</div>
				<br>
				<div style="margin-left: 500px; color:black">
					{{ Form::submit('Registrar', array())}}
					<a href="login">Atras</a>
				</div>
			{{ Form::close() }}
		</div>
	</div>
</body>
</html>