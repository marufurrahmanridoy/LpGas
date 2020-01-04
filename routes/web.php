<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('create');
});
//Route::get('/first', function () {
   // return view('adminpanel.about-1');
//});message//


Route::post('/store','CustomerController@store');
Route::get('/create','CustomerController@viewpage');

Route::post('/login1','RegisController@loginbd');
Route:: group (['middleware'=> 'checkuser'],function (){














});

Route::get('/loginpage',function (){
   return view('login');
});

Route::get('/about', function () {
    return view('adminpanel.about-2');
});

Route::get('/adminview','CustomerController@index');


Route::get('/regis','RegisController@viewreg');




Route::post('/reg','RegisController@reg');

Route::get ('qr-code-g',function(){

    return view('qrcode');
});

Route::get ('/order',function(){

    return view('order');
});

Route::post('/order','PaymentController@order');

Route::get ('/oxygen',function(){

    return view('qrcode.manger');
});

Route::get ('/man_reg',function(){

    return view('man_reg');
});



Route::post ('/message',function(){

    return view('message');
});

Route::get('/cusbill','CustomerController@cus');






















