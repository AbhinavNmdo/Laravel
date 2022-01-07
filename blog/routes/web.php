<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

// Route::get('/about/{name}', function ($name) {
//     return view('about', ["user"=>$name]);
// }); // ---------------------------First Method-------------------------------\\

Route::view('/about', 'about'); //-----------------------Second Method--------------------\\

// ! Restrict Page System
Route::view('/home', 'home')->middleware('protectedPage');
Route::view('/noaccess', 'noaccess');
// Route::group(['middleware' => ['protectedPage']], function(){
//     Route::view('/home', 'home');
// });

// ! Connection with Database
// Route::get('/indexusers', [UserController::class, 'index']);

// ! Fetching data with API
// Route::get('/users', [UserController::class, 'getDataApi']);

// ! Get data from user input
// Route::post('/users', [UserController::class, 'getData']);

// ! Fake Login system
Route::post('/users', [UserController::class, 'fakeLogin']);
Route::get('/users', function(){
    return view('user');
});
Route::get('/login', function(){
    if(session()->has('user')){
        return redirect('users');
    }
    else{
        return view('login');
    }
});
Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user', null);
    }
    return redirect('login');
});





// Route::get('/controller/{id}', [UserController::class, 'show']);
