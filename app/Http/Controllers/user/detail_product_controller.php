<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use DB;

class detail_product_controller
{
    public function index()
    {
    	return view('user/detail_product');
    }
}
