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


Route::get('/takdeid/','Haip@aa')->name('apa');

Route::get('/denganid/{id}','Haip@aa')->name('apa');

// Route::match(['get', 'post'], '/jjj', function () {
//     return view('jjj');
// });


// Route::post('/jjj', function () {
//     return view('welcome');
// });

Route::put('/denganid/{id}', 'Haip@bb');