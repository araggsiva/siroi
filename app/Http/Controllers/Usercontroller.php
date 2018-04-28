<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Usercontroller extends Controller
{
    public function index(Request $request){

$this->validate($request , [
        'email' => 'required|email' ,
        'password' => 'required']);
$data= DB::table('users')->where('email' , $request->email)->first();

	if($data){ 
        
            Session::put('user_id' , $data->user_id);
           return Redirect::to('');
    }
}


public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }
}
