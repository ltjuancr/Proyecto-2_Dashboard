<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->layout->nest('content', 'usuario.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->nest('content', 'usuario.registro');	
	}

	public function login(){
		$userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        );

        if (Auth::attempt($userdata)) { 


            
            return Redirect::to('tasks');
        } else {
            // validation not successful, send back to form
            return Redirect::to('login')->withErrors(array('invalid_credentials' => 'Acceso Denegado'));
        }

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


       $password = Input::get('password');
       $confirm = Input::get('confirm');

		if($password != $confirm){
          return Redirect::to('registro')->withErrors(array('invalid_credentials' => 'Su contraseña debe ser igual a la de confirmación'));

		}
		$email = Input::get('email');
		$password = Hash::make($password);
		$user = new User();
		$user->email = $email;
		$user->password = $password;
		$user->save();
		//$id_usuario = $user->id;
		Auth::attempt(array('email' => $email, 'password' => $password));
		return Redirect::to('tasks');
	}

	public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }

    public function isLogged()
    {
        if (Auth::guest()) {
            return Redirect::to('login');
        }
    }


}
