<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class Welcomecontroller extends Controller
{
    public function index(){

	$products= DB::select('select * from products');;
	return view('index',['result'=>$products]);
}
}
