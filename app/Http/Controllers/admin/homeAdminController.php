<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class homeAdminController
{
    public function home()
    {
    	return view('admin/homeAdmin');
    }
}
