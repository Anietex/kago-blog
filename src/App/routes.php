<?php

use Kago\Core\Router\Route;

Route::get('/','Kago\App\Controllers\PublicController@home');
Route::get('/admin','Kago\App\Controllers\AdminController@showLogin');
Route::get('/admin/post/create','Kago\App\Controllers\PostController@showCreatePost');
Route::get('/admin/post/manage','Kago\App\Controllers\PostController@showManagePost');



