<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\AboutController; 


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
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'show']); { // This is the route that will be used to access the About page
    return "My About Page";
}; 
