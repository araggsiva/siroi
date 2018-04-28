<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array(
    'uses' => 'Welcomecontroller@index'
    ));
Route::get('/wishlist', array(
    'uses' => 'Wishlistcontroller@index'
    ));
Route::get('/product/{pid}',array(
'uses' => 'Wishlistcontroller@getproduct'));
Route::get('/delete/{pid}','Wishlistcontroller@deleteproduct');
Route::get('ajax',function(){
   return view('message');
});
Route::get('/getmsg/{pid}','AjaxController@index');

 Route::post('/user/register', array(
    'uses' => 'Usercontroller@index'
    ));
Route::get('/logout','Usercontroller@getLogout');   
Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
