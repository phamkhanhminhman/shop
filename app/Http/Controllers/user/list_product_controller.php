<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use DB;

class list_product_controller
{
    public function index()
    {
    	return view('user/list_product');
    }
}
