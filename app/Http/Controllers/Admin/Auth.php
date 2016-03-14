<?php
namespace App\Http\Controllers\Admin;

class Auth extends Base
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function login()
    {
    	return view('admin.home.index');
    }

    public function logout()
    {

    }
}
