<?php


Auth::routes();

Route::get('/','HomeController@index')->name('home');



Route::get('posts','PostController@index')->name('post.index');
Route::get('/post/{slug}','PostController@details')->name('post.details');
Route::get('category/{slug}','PostController@postByCategory')->name('category.posts');
Route::get('tag/{slug}','PostController@postByTag')->name('tag.posts');

Route::post('subscriber','SubscriberController@store')->name('subscriber.store');
Route::get('/search','SearchController@search')->name('search');

Route::get('profile/{username}','AuthorController@profile')->name('author.profile');

Auth::routes();


Route::group(['middleware'=>['auth']],function (){
    Route::post('favorite/{post}/add','FavoriteController@add')->name('post.favorite');
    Route::post('comment/{post}','CommentController@store')->name('comment.store');
});


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware' =>['auth','admin']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');


    Route::get('/books','BooksController@index')->name('books');
    Route::get('/books/create','BooksController@create')->name('books.create');
    Route::post('/books/store','BooksController@store')->name('books.store');
    Route::get('/books/edit/{id}','BooksController@edit')->name('books.edit');
    Route::put('/books/update/{id}','BooksController@update')->name('books.update');
    Route::delete('/books/destroy/{id}','BooksController@destroy')->name('books.destroy');


    Route::get('/students','StudentsController@index')->name('students');
    Route::get('/students/add','StudentsController@create')->name('students.add');
    Route::post('/students/store','StudentsController@store')->name('students.store');
    Route::get('/students/edit/{id}','StudentsController@edit')->name('students.edit');
    Route::put('/books/update/{id}','BooksController@update')->name('books.update');
    Route::delete('/books/destroy/{id}','BooksController@destroy')->name('books.destroy');

    Route::get('/charts','ChartsController@index')->name('charts');



    Route::get('settings','SettingsController@index')->name('settings');
    Route::PUT('profile-update','SettingsController@updateprofile')->name('profile.update');
    Route::PUT('password-update','SettingsController@updatepassword')->name('password.update');

    Route::resource('tag','TagController');
    Route::resource('category','CategoryController');
    Route::resource('post','PostController');




    Route::get('/pending/post','PostController@pending')->name('post.pending');
    Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');

    Route::get('/favorite','FavoriteController@index')->name('favorite.index');

    Route::get('authors','AuthorController@index')->name('authors.index');
    Route::delete('authors/{id}','AuthorController@destroy')->name('authors.destroy');

    Route::get('comments','CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');

    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');

});

Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware' =>['auth','author']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::get('settings','SettingsController@index')->name('settings');
    Route::PUT('profile-update','SettingsController@updateprofile')->name('profile.update');
    Route::PUT('password-update','SettingsController@updatepassword')->name('password.update');

    Route::get('comments','CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');

    Route::resource('post','PostController');
    Route::get('/favorite','FavoriteController@index')->name('favorite.index');
});

View::composer('layouts.frontend.partial.footer',function ($view){
    $categories = App\Category::all();
    $view->with('categories',$categories);
});