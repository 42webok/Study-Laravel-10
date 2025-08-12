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

// Topic No 1 : how to create basic routes 

// syntax ----------------

// calling simple route 
Route::get('/home' , function(){
    return 'welcome to home page';
});

// calling view with route 

Route::get('/laravel' , function(){
    return view('home');
});

// short way to writing route

Route::view('short' , 'home');

// other file  calling

Route::view('new' , 'about');



