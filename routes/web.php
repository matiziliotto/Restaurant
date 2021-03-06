<?php

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/perfil', 'PerfilController@perfil')->name('perfil')->middleware('verified');
Route::post('/actualizarPerfil', 'PerfilController@actualizarPerfil')->name('actualizarPerfil')->middleware('verified');

Route::get('/notificarMenues', 'MailController@notificarMenues')->name('notificarMenues')->middleware('verified');