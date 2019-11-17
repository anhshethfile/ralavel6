<?php

//use Symfony\Component\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('dashboard', function () {

    return view('dashboard.home');

});

Route::resource('books', 'BookController');
Route::resource('users', 'AdminUsersController');
