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
Route::get('/groupe', 'App\Http\Controllers\PageController@liste')->name('groupe.liste');
Route::get('/groupe/{id}', 'App\Http\Controllers\PageController@groupe')->name('groupe');
Route::get('/pronostic', 'App\Http\Controllers\PronosticController@pronoliste')->name('prono');
Route::get('/pronostic/{id}', 'App\Http\Controllers\PronosticController@prono')->name('prono.show');
Route::get('/prono/{id}', 'App\Http\Controllers\PronosticController@create')->name('prono.create');
Route::post('/pronostic', 'App\Http\Controllers\PronosticController@pronoStore')->name('prono.store');
Route::patch('/pronostic/{id}', 'App\Http\Controllers\PronosticController@update')->name('prono.update');
/*Route::get("/prono", function () {
    return  view('prono.show');
})->middleware('auth')->name('prono');

Route::get("/groupe", function () {
    return  view('pages.showGroupe');
})->name('groupe');*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');