<?php

//User Routes
Route::group(['namespace' => 'User'], function () {

    Route::get('/', 'HomeController@index'); // as its not resource controller

    Route::get('post/{post?}', 'PostController@post')->name('post');
});


//Admin Routes

Route::group(['namespace' => 'Admin'], function () {
    //this is admin home index

    Route::get('admin/home', 'HomeController@index')->name('admin.home');

    //post routes
    Route::resource('admin/post', 'PostController');

    //user routes
    Route::resource('admin/user', 'UserController');

    //tag routes
    Route::resource('admin/tag', 'TagController');

    //category routes
    Route::resource('admin/category', 'CategoryController');
});

//OR next Method --our choice
//Route::resource('admin/category', ' Admin\CategoryController');
