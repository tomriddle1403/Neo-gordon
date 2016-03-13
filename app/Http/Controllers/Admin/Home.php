<?php
namespace App\Http\Controllers\Admin;

class Home extends Base
{
    public function index()
    {
        return view('admin.home.index');
    }
}
