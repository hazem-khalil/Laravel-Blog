<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class SessionControllers extends Controller
{

	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}
    
    public function create()
    {

    	return view('sessions.create');

    }

    public function store() 
    {

    	if (! Auth::attempt(request(['email', 'password']))) {

    		return back()->withErrors([
    			'message' => 'Please check your credentails and try again'
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
