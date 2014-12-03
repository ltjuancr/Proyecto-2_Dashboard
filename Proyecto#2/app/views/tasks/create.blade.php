<!DOCTYPE html>
<html>
<head>
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}
	{{HTML::style('style/modi.css')}}


</head>
<body id="header" >
	<div id="container" style="height: 550px;">

		<h3 id="titleTarea">Nueva Tarea</h3>
		<div id="letra">

			<img id="Image1_img" src="/style/img/notas.png">
			{{ Form::open(array('url' => 'tasks')) }}

				<div style="margin-left: 300px;">
					{{ Form::label('titulo', 'Titulo') }}

				    {{Form::text('titulo', Input::old('titulo'), array('required' => 'true'))}}
				    
					{{ Form::label('prioridad', 'Prioridad') }}
				    {{Form::select('prioridad', array('baja' => 'Baja','normal' => 'Normal','alta' => 'Alta'))}}
			    </div>
				<br>
				<div style="margin-left: 300px;">
					{{ Form::label('descripcion', 'Descripcion') }}
					<br>
					{{Form::textarea('descripcion', Input::old('descripcion'), array('required' => 'true'))}}
				</div>
			  	<br>
			  	<div style="margin-left: 500px; color: black;">
					
					{{Form::submit('Salvar', array())}}
					<button type="button" class="btn btn btn-sm">{{link_to("tasks/", 'Cancelar', $attributes = array(), $secure = null);}}</button>  
					
				</div>
			{{ Form::close() }}
		</div>
	</div>
</body>
</html>