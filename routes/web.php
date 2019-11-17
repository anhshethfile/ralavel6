<?php

//use Symfony\Component\Routing\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
  Route::get('dashboard', 'HomeController@index');


//  Route::get('dashboard', function () {

//     return view('dashboard.home');

// });

Route::resource('books', 'BookController');
Route::resource('users', 'AdminUsersController');



