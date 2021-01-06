<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PlayListController;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\Lottocontroller;
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

Route::get('/', [Maincontroller::class,"index"]);
Route::post('/insert/', [Maincontroller::class,"insert"]);
Route::get('/lotto/',[Lottocontroller::class,"lotto"]);

Route::get('/delete/{id}',[Maincontroller::class,"delete"]);

Route::get('/mylogout/',[Maincontroller::class,"logout"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');
