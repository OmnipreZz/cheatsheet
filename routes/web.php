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

///////////////////////////APP///////////////////////////

Route::get('/', 'AppController@index' );

// shorcuts index
Route::get('/raccourci', 'ShortcutController@index' )->name('shortcut_index');



///////////////////////////ADMIN///////////////////////////

Auth::routes();

Route::get('/admin', 'AdminController@index' );

// shortcuts admin index 
Route::get('/admin/shortcut', 'ShortcutController@admin' )->name('shortcut_admin')->middleware('auth');
// shortcuts create 
Route::get('/admin/shortcut/create', 'ShortcutController@create')->name('shortcut_create')->middleware('auth');
Route::post('/admin/shortcut/store', 'ShortcutController@store')->name('shortcut_store')->middleware('auth');
// shortcuts edit
Route::get('/admin/shortcut/edit{id}', 'ShortcutController@edit')->name('shortcut_edit')->middleware('auth');
Route::post('/admin/shortcut/update{id}', 'ShortcutController@update')->name('shortcut_update')->middleware('auth');
// shortcuts destroy
Route::get('/admin/shortcut/destroy/{id}', 'ShortcutController@destroy')->name('shortcut_destroy')->middleware('auth');
