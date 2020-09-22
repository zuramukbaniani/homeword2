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

use Illuminate\Http\Request;

Route::get("/", function () {
    return view('welcome');
});

Route::get("/custumer_input", function(){
	return view("guist.form");
});

Route::post("/view", function(Request $name){
	$custumer_data = [
		"name"=>$name->post()["fname"],
		"lname"=>$name->post()["lname"],
		"address"=>$name->post()["address"],
		"biography"=>$name->post()["biography"],
		"age"=>$name->post()["age"]
	];
	return view('guist.custumer', ['datas'=> $custumer_data]);
})->name('postmethod');