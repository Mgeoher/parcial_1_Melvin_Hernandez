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
    return view('pagina_1');

});

Route::get('/pagina_1', [\App\Http\Controllers\Controllerpaginas::class,  'index'])->name('pagina_1');
Route::get('/pagina_2', [\App\Http\Controllers\Controllerpaginas::class,  'pagina_2'])->name('pagina_2');
