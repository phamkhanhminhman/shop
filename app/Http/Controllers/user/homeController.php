<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;

class homeController
{
    public function home()
    {
    	return view('user/home');
    }
}
