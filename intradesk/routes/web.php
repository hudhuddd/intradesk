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

Route::get('/', 'PagesController@index');

Route::get('/directory', 'PagesController@directory');

Route::resource('categories', 'CategoriesController');

Route::resource('employees', 'EmployeesController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::resource('resources', 'ResourcesController');

//Route::resource('tickets', 'TicketsController');
//Route::get('tickets','TicketsController@index');
//Route::get('/tickets/create', 'TicketsController@create');
//Route::post('/tickets/store', 'TicketsController@store');
//Route::post('/tickets', 'TicketsController@sendTicket');

Route::get('/tickets', 'HelpdeskController@create');
Route::post('/tickets', [
    'uses' => 'HelpdeskController@store',
    'as' => 'tickets.store']);

Route::resource('holidays', 'HolidaysController');