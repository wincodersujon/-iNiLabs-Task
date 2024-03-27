<?php

use App\Http\Controllers\DeveloperController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/developers', [DeveloperController::class, 'index']);
Route::get('developers/add', [DeveloperController::class, 'add']);
Route::post('developers/add', [DeveloperController::class, 'add_post']);
Route::get('developers/edit/{id}', [DeveloperController::class, 'edit']);
Route::post('developers/edit/{id}', [DeveloperController::class, 'update']);
Route::get('developers/delete/{id}', [DeveloperController::class, 'delete']);
