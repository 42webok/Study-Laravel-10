<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Crud;
use App\Models\Test_model;

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



// Topic No 2 : how to create Parameter routes ====================================================================

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


// Topic no 3 : how to create Naming && Group routes ==============================================================================

// this is default route calling on default page load


// Route::get('/' , function(){
//     return view('home');
// });


// this is route for home page we can call it in blade template like this {{ route('homePage') }}

// Route::get('/abc' , function(){
//     return view('home');
// })->name('homePage');


// route gouping start here  ... This URL will be home/about OR home/contact 

// Route::prefix('home')->group(function(){
//     Route::get('/' , function(){
//         return 'home index';
//     });
//      Route::get('about' , function(){
//         return 'home about';
//     });
//      Route::get('contact' , function(){
//         return 'home contact';
//     });
// });

// --------------------------------------------------------------------------------------------------------

// Route Basic to Advance complete here ------==============================================================================


// Topic No 4 : Blade Template Engine ======================================================================================================

// if we want to send any parm in view so we use with method of view function 


// Important Notes :::
// 1 : Each File will save with the extension .blade.php like file_name.blade.php 





// Route::get('/{value?}' , function($value = ''){
//     return view('home')->with(['value' => $value]);
// });

// Route::get('/' , function($value = ''){
//     return view('welcome');
// });

// Topic No 5 : Controller ======================================================================================================

// path = > app/http/controllers/....
// we can also make controller by atrisan cammand 
// php artisan make:controller NameController


// Route::get('/main' , [TestController::class , 'index']);


// Topic No 6 : Advance controller  ======================================================================================================

// As we have one controller file and in it we have 3 functions son we can group the function in one controller file by using the following method


// Route::controller(TestController::class)->group(function(){
//     Route::get('/main' , 'index');
//     Route::get('/about' ,  'about');
//     Route::get('/contact' , 'contact');
// });


// we have an invoke cntroller that is used to invoke the controller method (call only one function immediatly )
// we have also an resourses controller that has built in methods of crud operation 


// Tpoic No 7 : Migration and table  ======================================================================================================
// Migration is used to create table in database 
// we can create table by using the following command
// php artisan make:migration create_table_name_table 
// we can also create table by using the following command
// php artisan make:migration create_table_name_table --create=table_name


// Topic number 8   : Models 

// Route::get('/' , function(){
//     $data = Test_model::get();
//     dd($data->toArray());
// });

// Topic number 9 : sending from data into controller 

// Route::get('/' , [Register::class , 'index']);
// Route::get('view' , [Register::class , 'view']);


// Route::post('add' , [Register::class , 'send']);


Route::get('/' , [Crud::class , 'index']);
Route::get('add' , [Crud::class , 'insert']);
Route::post('addFormData' , [Crud::class , 'addData']);
Route::get('editFormData/{user_id}' , [Crud::class , 'editData']);
Route::post('updateFormData/{user_id}' , [Crud::class , 'updateData']);
Route::get('delete/{user_id}' , [Crud::class , 'delete']);