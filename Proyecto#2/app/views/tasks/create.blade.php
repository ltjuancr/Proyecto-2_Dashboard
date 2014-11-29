<h3>Nueva Tarea</h3>
{{ Form::open(array('url' => 'tasks')) }}
	{{ Form::label('titulo', 'Titulo') }}
    {{Form::text('titulo', Input::old('titulo'), array('required' => 'true'))}}

	{{ Form::label('prioridad', 'Prioridad') }}
    {{Form::select('prioridad', array('baja' => 'Baja','normal' => 'Normal','alta' => 'Alta'))}}

	<br>
	{{ Form::label('descripcion', 'Descripcion') }}
	<br>
	{{Form::textarea('descripcion', Input::old('descripcion'), array('required' => 'true'))}}
  <br>
	{{Form::submit('Salvar', array())}}

	 {{link_to("tasks/", 'Cancelar', $attributes = array(), $secure = null);}}

{{ Form::close() }}