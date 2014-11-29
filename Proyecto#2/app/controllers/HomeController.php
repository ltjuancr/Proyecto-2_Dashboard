<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home');
	}

	public function index()
	{
		$id = Auth::user()->id;  //Toma el ID del usuario logeado 
       $tareas = Task::tareasDisponibles($id); //COnsulta en el modelo Tarea que trae las tareas disponibles para el usuario logeado de la BD

		$this->layout->titulo = 'Listado de tareas';
		$this->layout->nest(
			'content',
			'tasks',
			array(
				'tareas' => $tareas
			)
		);

		//$this->layout->nest('content', 'tareas1');
	}

		public function destroy($id)
	{
		$tarea = Task::find($id); //busca la tarea que tenga el ID deseado en la BD
		$tarea->delete(); //elimina la atrea 
		return Redirect::to('tasks'); // redirecciona
	}

	public function create()
	{
		$this->layout->titulo = 'Crear Tarea';
		$this->layout->nest(
			'content',
			'tasks.create',
			array()
		);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$titulo = Input::get('titulo');//obtenemos el titulo de la tarea
		$prioridad= Input::get('prioridad');//obtenemos la prioridad deseada 
		$descripcion = Input::get('descripcion');//obtenemos la descripcion de la tarea
		$estado = 'nueva';// el estado siempre va a comenzar en Nueva
		$id_user = Auth::user()->id;//obtenemos el id del usuario logeado

		$tarea = new Task();//crea una nueva tarea
		$tarea->titulo = $titulo;
		$tarea->prioridad = $prioridad;
		$tarea->descripcion = $descripcion;
		$tarea->estado = $estado;
		$tarea->id_user = $id_user;
		$tarea->save(); // guardamos en la BD la tarea nueva
		return Redirect::to('tasks');
	}

	public function cambiarEstado()
	{
		$id = Input::get('id'); //tomamo el id de la tarea pasado por ajax 
		$estado = Input::get('estado');//tomamo el estado del contenedor de drack and drop por ajax


        $tarea = Task::find($id); //buscamos la tarea por el id
		$tarea->estado = $estado;//cambiamos el estado
		$tarea->save();//se guardan los cambios echos
		return Response::Json("hola");
	}

		public function edit($id)
	{
		$this->layout->titulo = 'Editar Tarea';
		$tarea = Task::find($id);
		$this->layout->nest(
			'content',
			'tasks.edit',
			array(
				'tarea' => $tarea
			)
		);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$titulo = Input::get('titulo');
		$prioridad= Input::get('prioridad');
		$descripcion = Input::get('descripcion');

		$tarea = Tarea::find($id);
		$tarea->titulo = $titulo;
		$tarea->prioridad = $prioridad;
		$tarea->descripcion = $descripcion;
		$tarea->save();

		return Redirect::to('tasks');

	}


}
