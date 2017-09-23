<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }
    public function create(){
		return view('newAuth/log/create');
	}
	public function store()
	{
		if(! auth()->attempt(request(['email', 'password']))){
			return back()->withErrors([
				'message' => 'Please, write right password'
				]);
		}
		
		return redirect()->home();
	}
	public function destroy()
	{
		auth()->logout();
		
		return redirect()->home();
	}
}
