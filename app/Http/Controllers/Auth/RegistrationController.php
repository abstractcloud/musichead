<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegistrationController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest');
    }
	public function create()
	{
		return view('newAuth/reg/create');
	}
	public function store()
	{
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|unique:users|email',
			'password' => 'required|confirmed'
		]);
		$name = request('name');
		$email = request('email');
		$password = bcrypt(request('password'));
		$user = User::create(compact('name','email','password'));
		auth()->login($user);
		return redirect()->home();
	}
	
}
