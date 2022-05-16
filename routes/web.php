<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\WinesController;

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
    return view('main');
}) -> name('home');

Route::get('/wines', [WinesController::class, 'index']) -> name('wines');
Route::post('/wines', [WinesController::class, 'store']) -> name('store.wines');
Route::post('/wines/{ID}', [WinesController::class, 'edit']) -> name('edit.wines');
Route::delete('/wines/{ID}', [WinesController::class, 'delete']) -> name('delete.wines');