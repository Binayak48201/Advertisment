<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class SessionsController extends Controller
{
	public function __construct()
	{

		$this->middleware('guest', ['except' => 'destroy']);
	}

    public function create()
    {
    	return view('admin.auth.login');
    }

    public function store()
    {
    	// Attempt to authenicate the user
    	if(! auth()->attempt(request(['email','password']))){
    		return back();
    	}
    	return redirect('/admin/dashboard');
    }

	public function destroy()

	{
		auth()->logout();

		return redirect('/admin/login');
	}
}
