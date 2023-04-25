<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index',["myName"=>"KwiKwi","myAge"=>32])->with('gf',"tokeToke");
});
Route::get('/about-us',function(){
    return view("about");
})->name("page.about");
Route::view('/contact-us', 'contact',["phone"=>"0912312313"])->name("page.contact");
