<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->auth = app('auth');
    }

    public function login()
    {
        if ($this->auth->check() ){
            return view('admin.home.index');
        }

        return view('admin.login');
    }

    public function getLogin(Request $request)
    {

       if ($this->auth->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('admin.home.index'));
        }

        return view('admin.login')
            ->withErrors([
                'login.failed' => trans('auth.failed'),
            ]);
    }

    public function logout()
    {
        $this->auth->logout();

        return redirect(route('admin.login'));
    }
}
