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
})->name('site.welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('/cronogramas/{id}', function ($id) {
    return view('id', ['id' => $id]);
})->name('site.id');*/


Route::middleware(['auth'])->group(function(){
    Route::resource('cronogramas','CronogramaController');
    Route::resource('biblioteca','BibliotecaController');
    Route::resource('semanas','SemanasController');
    Route::resource('perfil','PerfilController');
    Route::resource('altsenha','AltsenhaController');
    Route::resource('manual','ManualController');


    Route::get('/auto', function () {
        return view('auto');
    })->name('site.auto');

    Route::get('/manual', function () {
        return view('manual');
    })->name('site.manual');

    Route::get('/perfil/altSenha', function () {
        return view('altSenha');
    })->name('altSenha');


    Route::get('/sobre', function () {
        return view('sobre');
    })->name('site.sobre');



});
