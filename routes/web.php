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

// Front Controller
Route::get('/', 'FrontController@index');
Route::get('/blog', 'FrontController@blog_list');
Route::get('/article', 'FrontController@blog_article');
Route::get('/login-test', 'FrontController@login_test');

// Blog Controller
Route::get('/posts/{post}', 'BlogController@post');
Route::get('/categories/{category}', 'BlogController@category');
Route::post('/posts/{post}/comment', 'BlogController@comment')->middleware('auth');

Route::post('/account/login', 'AccountController@login');
Route::post('/account/logout', 'AccountController@logout');

Auth::routes();
// User Account
Route::get('/account', 'AccountController@account');

// Admin Account
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
    Route::resource('/posts', 'PostController', ['except' => ['show']]);
    Route::put('/posts/{post}/publish', 'PostController@publish')->middleware('admin');
    Route::resource('/categories', 'CategoryController', ['except' => ['show']]);
    Route::resource('/tags', 'TagController', ['except' => ['show']]);
    Route::resource('/files', 'FileController');
    Route::resource('/comments', 'CommentController', ['only' => ['index', 'destroy']]);
    Route::resource('/users', 'UserController', ['middleware' => 'admin', 'only' => ['index', 'destroy']]);
});

Route::prefix('admin_api')->group(function () {
    Route::get('/images', 'Admin\ImageController@images');
    Route::post('/image_upload', 'Admin\ImageController@image_upload');
    Route::post('/image_update', 'Admin\ImageController@image_update');
    Route::post('/image_delete', 'Admin\ImageController@image_delete');
});
