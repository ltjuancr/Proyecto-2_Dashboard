<h1>Registro</h1>
@if ($errors->has())
    <div class="alert-danger text-center" role="alert">
        <small>{{ $errors->first('email') }}</small>
        <small>{{ $errors->first('password') }}</small>
        <small>{{ $errors->first('confirm') }}</small>
    </div>
@endif
{{ Form::open(array('url' => 'registro')) }}
	<label for="email">Email:</label>
	{{Form::text('email', Input::old('email'), array('placeholder' => 'Email','required' => 'true'))}}
	<br>
	<label for="password">Password:</label>
	{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control','required' => 'true')) }}
	<br>
	<label for="confirm">Confirm:</label>
	{{ Form::password('confirm', array('placeholder' => 'Contraseña', 'class' => 'form-control','required' => 'true')) }}
	<br>
	{{ Form::submit('Registrar', array())}}
		<a href="login">Atras</a>
{{ Form::close() }}