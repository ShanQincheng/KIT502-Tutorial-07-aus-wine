<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
});

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

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products/{name}',
    [ProductsController::class, 'show']) -> where([
        'name' => '[a-zA-Z]+',
    ]);
