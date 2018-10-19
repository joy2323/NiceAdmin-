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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pages/index', 'DashboardController@dash');


Route::get('pages/basic_table','TablesController@table');


Route::get('pages/chart-chartjs','ChartController@chart');


Route::get('pages/form_component','FormsController@form');
Route::get('pages/form_validation','FormsController@form1');


Route::get('pages/general','UiController@gen');
Route::get('pages/grids','UiController@grid');
Route::get('pages/buttons','UiController@butt');


Route::get('pages/profile','PagesController@pro');
Route::get('pages/login','PagesController@log');
Route::get('pages/contact','PagesController@con');
Route::get('pages/blank','PagesController@blan');
Route::get('pages/404','PagesController@error');


Route::get('pages/widgets','WidgetsController@wid');