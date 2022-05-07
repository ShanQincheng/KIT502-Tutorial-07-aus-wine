<?php

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
