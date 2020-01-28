<?php

use Kago\Core\Router\Route;



Route::get('/admin','Kago\App\Controllers\AdminController@showLogin');
Route::post('/admin/login','Kago\App\Controllers\AdminController@login');



Route::get('/admin/post/create','Kago\App\Controllers\PostController@showCreatePost');
Route::post('/admin/post/create','Kago\App\Controllers\PostController@createPost');
Route::get('/admin/post/delete/:id', 'Kago\App\Controllers\PostController@deletePost');
Route::get('/admin/post/edit/:id', 'Kago\App\Controllers\PostController@editPost');
Route::get('/admin/post/update/:id', 'Kago\App\Controllers\PostController@updatePost');




Route::get('/admin/post/manage','Kago\App\Controllers\PostController@showManagePost');

Route::get('/','Kago\App\Controllers\PublicController@home');
Route::get('/post/:id/:slug','Kago\App\Controllers\PublicController@showPost');





