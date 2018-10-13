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
Route::get('/shortcut', 'ShortcutController@index' )->name('shortcut_index');
Route::Post('/shortcut/category','ShortcutController@indexByCat')->name('shortcut_category');

// commands index
Route::get('/command', 'CommandController@index' )->name('command_index');

Route::Post('/command/category','CommandController@indexByCat')->name('command_category');



///////////////////////////ADMIN///////////////////////////
Auth::routes();

Route::get('/admin', 'AdminController@index' )->name('admin_home')->middleware('auth');
Route::get('/admin/users', 'AdminController@admin' )->name('admin_admin')->middleware('auth');
// users register
Route::get('/register', 'AdminController@register' )->name('admin_register')->middleware('auth');
Route::post('/register/create', 'AdminController@store' )->name('admin_store')->middleware('auth');
// users destroy
Route::get('/admin/users/destroy{id}', 'AdminController@destroy')->name('admin_destroy')->middleware('auth');

// shortcuts admin index 
Route::get('/admin/shortcut', 'ShortcutController@admin' )->name('shortcut_admin')->middleware('auth');
Route::Post('/admin/shortcut/bycategory','ShortcutController@adminByCat')->name('shortcut_admincategory')->middleware('auth');
// shortcuts create 
Route::get('/admin/shortcut/create', 'ShortcutController@create')->name('shortcut_create')->middleware('auth');
Route::post('/admin/shortcut/store', 'ShortcutController@store')->name('shortcut_store')->middleware('auth');
// shortcuts edit
Route::get('/admin/shortcut/edit{id}', 'ShortcutController@edit')->name('shortcut_edit')->middleware('auth');
Route::post('/admin/shortcut/update{id}', 'ShortcutController@update')->name('shortcut_update')->middleware('auth');
// shortcuts destroy
Route::get('/admin/shortcut/destroy{id}', 'ShortcutController@destroy')->name('shortcut_destroy')->middleware('auth');

// shortcutCat admin index 
Route::get('/admin/shortcut/indexcategory', 'ShortcutCategoryController@admin' )->name('shortcutCat_admin')->middleware('auth');
// shortcutCat create 
Route::get('/admin/shortcut/category/create', 'ShortcutCategoryController@create')->name('shortcutCat_create')->middleware('auth');
Route::post('/admin/shortcut/category/store', 'ShortcutCategoryController@store')->name('shortcutCat_store')->middleware('auth');
// shortcutCat edit
Route::get('/admin/shortcut/category/edit{id}', 'ShortcutCategoryController@edit')->name('shortcutCat_edit')->middleware('auth');
Route::post('/admin/shortcut/category/update{id}', 'ShortcutCategoryController@update')->name('shortcutCat_update')->middleware('auth');
// shortcutCat destroy
Route::get('/admin/shortcut/category/destroy{id}', 'ShortcutCategoryController@destroy')->name('shortcutCat_destroy')->middleware('auth');

// commands admin index 
Route::get('/admin/command', 'CommandController@admin' )->name('command_admin')->middleware('auth');
Route::Post('/admin/command/bycategory','CommandController@adminByCat')->name('command_admincategory')->middleware('auth');
// commands create 
Route::get('/admin/command/create', 'CommandController@create')->name('command_create')->middleware('auth');
Route::post('/admin/command/store', 'CommandController@store')->name('command_store')->middleware('auth');
// commands edit
Route::get('/admin/command/edit{id}', 'CommandController@edit')->name('command_edit')->middleware('auth');
Route::post('/admin/command/update{id}', 'CommandController@update')->name('command_update')->middleware('auth');
// commands destroy
Route::get('/admin/command/destroy{id}', 'CommandController@destroy')->name('command_destroy')->middleware('auth');

// commandCat admin index 
Route::get('/admin/command/indexcategory', 'CommandCategoryController@admin' )->name('commandCat_admin')->middleware('auth');
// commandCat create 
Route::get('/admin/command/category/create', 'CommandCategoryController@create')->name('commandCat_create')->middleware('auth');
Route::post('/admin/command/category/store', 'CommandCategoryController@store')->name('commandCat_store')->middleware('auth');
// commandCat edit
Route::get('/admin/command/category/edit{id}', 'CommandCategoryController@edit')->name('commandCat_edit')->middleware('auth');
Route::post('/admin/command/category/update{id}', 'CommandCategoryController@update')->name('commandCat_update')->middleware('auth');
// commandCat destroy
Route::get('/admin/command/category/destroy{id}', 'CommandCategoryController@destroy')->name('commandCat_destroy')->middleware('auth');


