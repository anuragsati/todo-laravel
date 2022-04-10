<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo_list;
use App\Http\Controllers\TodoListController;


Route::get('/', 'App\Http\Controllers\TodoListController@index' );

Route::get('save_new_list', 'App\Http\Controllers\TodoListController@store' );

Route::get('delete/{id}', 'App\Http\Controllers\TodoListController@destroy' );
