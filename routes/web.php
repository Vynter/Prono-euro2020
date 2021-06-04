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

Route::get('/', 'App\Http\Controllers\PageController@index')->name('dashboard');
Route::get('/groupe/{id}', 'App\Http\Controllers\PageController@groupe')->name('groupe');
Route::get("/prono", function () {
    return  view('prono.show');
})->middleware('auth')->name('prono');

Route::get("/groupe", function () {
    return  view('pages.showGroupe');
})->name('groupe');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');