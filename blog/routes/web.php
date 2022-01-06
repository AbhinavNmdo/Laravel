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
Route::view('/home', 'home')->middleware('protectedPage');
Route::view('/noaccess', 'noaccess');
// Route::get('/indexusers', [UserController::class, 'index']);

Route::get('/users', [UserController::class, 'getDataApi']);

// Route::group(['middleware' => ['protectedPage']], function(){
//     Route::view('/home', 'home');
// });

// Route::post('/users', [UserController::class, 'getData']);
Route::view('/login', 'login');
// Route::get('/controller/{id}', [UserController::class, 'show']);
