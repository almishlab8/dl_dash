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

Route::get('/', 'guide@index')->middleware('auth');
Route::get('/guide', 'guide@index')->middleware('auth');
Route::get('/addcompany/{id}', 'guide@addcompany')->middleware('auth');
Route::get('/delete_company/{id}/{cat_id}', 'guide@delete_company')->middleware('auth');
Route::get('/edit_company/{id}/{cat_id}', 'guide@edit_company')->middleware('auth');
Route::post('/edit_company/{id}', 'guide@edit_company')->middleware('auth');

Route::post('/addcompany/{id}', 'guide@addcompany')->middleware('auth');
Route::get('marketing', 'market@index')->middleware('auth');


Route::post('addmarket', 'market@addmarket')->middleware('auth');
Route::get('delete_market/{id}', 'market@delete_market')->middleware('auth');

//==================Career Route =========================
Route::get('career', 'careers@index')->middleware('auth');
Route::post('addcareer', 'careers@addcareer')->middleware('auth');
Route::get('delete_career/{id}', 'careers@delete_career')->middleware('auth');
Route::post('edit_career/{id}', 'careers@edit_career')->middleware('auth');
Route::get('edit_career/{id}', 'careers@edit_career')->middleware('auth');

//=================== End Career Route ===================
Route::get('job', 'jobs@index')->middleware('auth');
Route::post('addjobs', 'jobs@addjobs')->middleware('auth');
Route::get('delete_jobs/{id}', 'jobs@delete_jobs')->middleware('auth');
Route::get('edit_jobs/{id}', 'jobs@edit_jobs')->middleware('auth');
Route::post('edit_jobs/{id}', 'jobs@edit_jobs')->middleware('auth');

Route::get('phones', 'phones@index')->middleware('auth');
Route::get('delete_phone/{id}', 'phones@delete')->middleware('auth');
Route::post('addphones', 'phones@addphones')->middleware('auth');
Route::get('users/{id}', function ($id) {
    
});
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
