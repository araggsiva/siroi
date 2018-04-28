<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class Wishlistcontroller extends Controller
{
    
	public function index(){
 $id=Session::get('user_id');
$wish= DB::table('wishlist')->where('user_id' , $id)->get();
if($wish){
foreach($wish as $w){
$pro[]= DB::table('products')->where('product_id' , $w->product_id)->get();
}
foreach($pro as $p){
$k[]=$p[0];
}
return view('wishlist',['result'=>$k]);
}
}

public function deleteproduct($pid){
$id=Session::get('user_id');
DB::table('wishlist')->where('user_id',$id)->where('product_id',$pid)->delete();
 return Redirect::to('/wishlist');
}

public function getproduct($pid){
$pro= DB::table('products')->where('product_id' , $pid)->get();
return view('product',['result'=>$pro]);
}
}
