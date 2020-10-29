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


//pages
Route::get('/about', 'PagesController@about');
Route::get('/index', 'PagesController@index');
Route::get('/ser', 'PagesController@services');

//posts
Auth::routes();
Route::get('/posts/index','PostsController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('show/{id}','HomeController@show')->name('posts.show');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::post('posts/store', 'PostsController@store')->name('posts.store');
//admin
Route::group(['middleware'=>['auth','admin']],function(){
    
    Route::get('/dashboard/{id}',('PostsController@postAccept'))->name('admin.dashboard');
    Route::get('/dashboard',('PostsController@postIndex'))->name('admin.dashboard.index');
   
    
});