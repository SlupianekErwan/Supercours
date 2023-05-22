<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

Route::get('/home', function () {
    return redirect('/');
});

Route::fallback(function() {
   return view('404');
}); 

Route::get("/", [FirstController::class, 'index']);

Route::get("/photos/{id}", [FirstController::class, 'photos'])-> where('id', '[0-9]+');
Route::get("/photos/create", [FirstController::class, 'create'])->middleware('auth');
Route::post("/photos/store",[FirstController::class, "store"])->middleware('auth');

Route::get("/users/{id}", [FirstController::class,"users"])->where('id', "[0-9]+");
Route::get("/follow/{id}", [FirstController::class,"follow"])->where('id', "[0-9]+")->middleware('auth');