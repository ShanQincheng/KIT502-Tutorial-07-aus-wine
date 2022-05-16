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

Route::get('/users', function() {
    return 'Welcome to the users page';
});

Route::get('/array', function() {
   return ['KIT502', 'Web Development', 'Laravel'];
});

Route::get('/jsonObject', function() {
   return response() -> json([
      'unit' => 'KIT502',
      'name' => 'Web Development',
      'topic' => 'Laravel'
   ]);
});

Route::get('/products', [ProductsController::class, 'index']) -> name('products');
Route::get('/products/{name}',
    [ProductsController::class, 'show']) -> where([
        'name' => '[a-zA-Z]+',
    ]);

Route::get('about', [MainPageController::class, 'about']) -> name('about');

Route::get('/wines', [WinesController::class, 'index']) -> name('wines');
Route::post('/wines', [WinesController::class, 'store']) -> name('store.wines');
Route::post('/wines/{ID}', [WinesController::class, 'edit']) -> name('edit.wines');
Route::delete('/wines/{ID}', [WinesController::class, 'delete']) -> name('delete.wines');