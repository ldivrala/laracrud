<?php

use App\Http\Controllers\CrudController;
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


Route::get('crud/crud_list', 'CrudController@crud_list')->name('crud.crud_list');
Route::get('crud/delete/{id}', 'CrudController@delete')->name('crud.delete');
Route::redirect('/', '/crud');
Route::resource('crud', 'CrudController');
