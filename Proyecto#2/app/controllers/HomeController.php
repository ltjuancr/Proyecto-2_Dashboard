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
		$id = Auth::user()->id;
       $tareas = Tarea::tareasDisponibles($id);

		$this->layout->titulo = 'Listado de tareas';
		$this->layout->nest(
			'content',
			'tareas',
			array(
				'tareas' => $tareas
			)
		);

		//$this->layout->nest('content', 'tareas1');
	}

    public function tareasAjax()
	{
       $id = Auth::user()->id;
       $tareas = Tarea::tareasDisponibles($id);
	   //var_dump($tareas);
      
       return Response::Json($tareas);
	}


		public function destroy($id)
	{
		$tarea = Tarea::find($id);
		$tarea->delete();
		return Redirect::to('tareas');
	}

	public function create()
	{
		$this->layout->titulo = 'Crear Tarea';
		$this->layout->nest(
			'content',
			'tareas.create',
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
		$titulo = Input::get('titulo');
		$prioridad= Input::get('prioridad');
		$descripcion = Input::get('descripcion');
		$estado = 'nueva';
		$id_user = Auth::user()->id;

		$tarea = new Tarea();
		$tarea->titulo = $titulo;
		$tarea->prioridad = $prioridad;
		$tarea->descripcion = $descripcion;
		$tarea->estado = $estado;
		$tarea->id_user = $id_user;
		$tarea->save();
		return Redirect::to('tareas');
	}

	public function cambiarEstado()
	{
		$id = Input::get('id');
		$estado = Input::get('estado');


        $tarea = Tarea::find($id);
		$tarea->estado = $estado;
		$tarea->save();
		return Response::Json("hola");
	}

		public function edit($id)
	{
		$this->layout->titulo = 'Editar Tarea';
		$tarea = Tarea::find($id);
		$this->layout->nest(
			'content',
			'tareas.edit',
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

		return Redirect::to('tareas');

	}


}
