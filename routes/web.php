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
// Route::get('/home' , function(){
//     return 'welcome to home page';
// });

// calling view with route 

// Route::get('/laravel' , function(){
//     return view('home');
// });

// short way to writing route

// Route::view('short' , 'home');

// other file  calling

// Route::view('new' , 'about');



// Topic No 2 : how to create Parameter routes 

// if we not put parameter in route then it will throw error
// Route::get('parameter/{id}' , function($id){
//     return $id;
// });

// if we initialize blank variable then it will not throw error
// Route::get('parameter/{id?}' , function($id = ''){
//     return $id;
// });

// route with only numbers else 404 

// Route::get('parameter/{id?}' , function($id = ''){
//     return $id;
// })->whereNumber('id');


// route with alpha 

// Route::get('parameter/{id?}' , function($id = ''){
//     return $id;
// })->whereAlpha('id');


// route with alpha  numeric mean run for both case 

// Route::get('parameter/{id?}' , function($id = ''){
//     return $id;
// })->whereAlphaNumeric('id');


// for route with special charecter we use regex

// Route::get('parameter/{id?}' , function($id = ''){
//     return $id;
// })->where('id' , '[a-zA-Z0-9-&*]+');


// if we want to put or owon parameter in route then we use optional && for retrection we use 
// Route::get('parameter/{id?}' , function($id = ''){
//     return $id;
// })->whereIn('id' , ['Ahmad' , 'Ali' , 'hassan' ]);