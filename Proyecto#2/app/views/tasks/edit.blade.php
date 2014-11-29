<h3>Editar Tarea</h3>

{{ Form::open(array('url' => "tasks/$tarea->id/update")) }}
	{{ Form::label('titulo', 'Titulo') }}
	{{ Form::text('titulo', $tarea->titulo) }}

	{{ Form::label('prioridad', 'Prioridad') }}
    {{Form::select('prioridad', array('baja' => 'Baja','normal' => 'Normal','alta' => 'Alta'),$tarea->prioridad)}}
	<br>
	{{ Form::label('descripcion', 'Descripcion') }}
	<br>
	{{Form::textarea('descripcion',$tarea->descripcion)}}
  <br>
	{{Form::submit('Salvar', array())}}
	 {{link_to("tasks/", 'Cancelar', $attributes = array(), $secure = null);}}

{{ Form::close() }}