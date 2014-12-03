<!DOCTYPE html>
<html>
<head>
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}
	{{HTML::style('style/modi.css')}}


</head>
<body id="header" >
	<div id="container" style="height: 550px;">

		<h3 id="titleTarea">Editar Tarea</h3>
		<div id="letra">

			<img id="Image1_img" src="/style/img/edit.jpg">
			{{ Form::open(array('url' => "tasks/$tarea->id/update")) }}
				<div style="margin-left: 300px;">
					{{ Form::label('titulo', 'Titulo') }}
					{{ Form::text('titulo', $tarea->titulo) }}

					{{ Form::label('prioridad', 'Prioridad') }}
				    {{Form::select('prioridad', array('baja' => 'Baja','normal' => 'Normal','alta' => 'Alta'),$tarea->prioridad)}}
				</div>	
				<br>
				<div style="margin-left: 300px;">
					{{ Form::label('descripcion', 'Descripcion') }}
				<br>
					{{Form::textarea('descripcion',$tarea->descripcion)}}
				 </div>
				 <br>
				 <div style="margin-left: 500px; color: black;">
					{{Form::submit('Salvar', array())}}
					{{link_to("tasks/", 'Cancelar', $attributes = array(), $secure = null);}}
				</div>
			{{ Form::close() }}
		</div>
	</div>
</body>
</html>