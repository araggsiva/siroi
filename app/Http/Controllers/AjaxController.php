<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AjaxController extends Controller
{
    public function index($pid){
	$id=Session::get('user_id');
		$date = date('Y-m-d H:i:s');
	$res=DB::insert('insert into wishlist (id, user_id, product_id, timestamp) values (?, ?, ?, ?)', ['', $id, $pid, $date]);
	if($res != NULL){
echo "Product added to wishlist";
}else{
echo "Unable to add wishlist";
}
   }
}
