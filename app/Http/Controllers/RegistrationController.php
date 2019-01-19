<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegistrationController extends Controller
{
	public function __construct()

	{
		$this->middleware('auth');

	}

    public function index()

    {
        $users = User::latest()->paginate(5);
        return view('admin.auth.view_admin',compact('users'));
    }

    public function create()
    {
    	return view('admin.auth.create');
    }

    public function store()
    {
    	// Validate the form
    	$this->validate(request(),[
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    	]);
    	// Create and save the user
    	 $req = request(['name','email','password']);
        $req['password'] = bcrypt('password');
        $user = User::create($req);
    	// User::create(request(['name','email','password']));

    	return redirect('/admin/view_admin')->with('flash','User Registered');
    }
     public function destroy($user)
    {
        $users = User::findOrFail($user);
        $users->delete(); 
        return redirect('admin/view_admin')->with('flash','Sucessfully Deleted.');
    }
}
