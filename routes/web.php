<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return 'continuo no router! =D';
//     return view('welcome');
// });
Route::get('/include', [SiteController::class, 'index2']);
Route::get('/', [SiteController::class, 'index']);
Route::get('/exit', [SiteController::class, 'exit']);
Route::get('/users/{qnt}', [SiteController::class, 'users']);
Route::get('/layout', [SiteController::class, 'layout']);
Route::get('/layout2', [SiteController::class, 'layout2']);
