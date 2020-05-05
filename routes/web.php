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

Route::get('/', 'PagesController@home');
Route::get('/transports', 'PagesController@transports');
Route::get('/accomodation', 'PagesController@accomodation');
Route::get('/package', 'PagesController@package');
Route::get('/order', 'PagesController@order');
Route::post('/order', 'OrderController@cariTiket');


//admin
Route::get('/admin','AdminController@index');
Route::get('/admin/ticket','TicketController@index');
Route::get('/admin/ticket/add','TicketController@create');
Route::post('/admin/ticket','TicketController@store');