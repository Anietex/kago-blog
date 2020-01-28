<?php

use Kago\Core\Router\Route;

Route::get('/','Kago\App\Controllers\PublicController@home');
Route::get('/admin','Kago\App\Controllers\AdminController@showLogin');
Route::post('/admin/login','Kago\App\Controllers\AdminController@login');



Route::get('/admin/post/create','Kago\App\Controllers\PostController@showCreatePost');
Route::post('/admin/post/create','Kago\App\Controllers\PostController@createPost');
Route::get('/admin/post/delete/:id', 'Kago\App\Controllers\PostController@deletePost');


Route::get('/admin/post/manage','Kago\App\Controllers\PostController@showManagePost');




