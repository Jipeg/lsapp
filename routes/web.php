<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; //!! ВАЖНО добавить!

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

Route::get('/', [PageController::class, 'index']); 
Route::get('/about', [PageController::class, 'about']);    
Route::get('/services', [PageController::class, 'services']);    



// Route::get('/kolya', function () {
//     return 'Hello, kolya';
// });

// Route::get('/about/{id}/{name}', function ($id, $name) {
//     //return view('pages/about');
//     return "User name is $name, id is $id";
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
