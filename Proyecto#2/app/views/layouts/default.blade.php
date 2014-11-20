<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
  {{HTML::style('style/css/bootstrap.min.css')}}
</head>
<body>
	<?php
		if (Auth::check()) {
			echo "<a href='logout'>Cerrar Session</a>";
			echo "<h3>Usuario Logueado :".Auth::user()->email."</h3>";
		}
	?>

	@if ($errors->has())
    <div class="alert-danger text-center" role="alert">
        <small>{{ $errors->first('user') }}</small>
    </div>
    @endif

	{{ $content }}
</body>
</html>

{{HTML::script('js/jquery-2.0.3.min.js');}}
{{HTML::script('js/js.js');}}