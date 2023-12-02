<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

// route for welcome page
Route::get('/welcome', [WelcomeController::class, 'welcome']);
// route for about page
Route::get('/about', [WelcomeController::class, 'about']);
// route for home page
Route::get('/',[WelcomeController::class, 'home']);
// createStudentsTable route
Route::get('/create-students-table', [WelcomeController::class, 'createStudentsTable']);
