<?php


// Route::get('post/create', 'PostController@create')->name('post.create');
// Route::get('post/edit', 'PostController@edit')->name('post.edit');
// Route::get('post/destroy', 'PostController@destroy')->name('post.delete');


// Route::get('/', function () {
//     // $name = request('name');
//     $peoples = ['Irsyad', 'Rizky', 'Amirul'];
//     return view('home', ['names' => $peoples]);
// });

// Route::get('tentang-kami', function () {
//     return view('about');
// })->name('about');

// Route::get('contact-us', function () {
//     return view('contact');
// })->name('contact');

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::get('articles', 'ArticleController@index')->name('articles.index');

Route::get('/create-new-article', 'ArticleController@create')->name('articles.create');
Route::post('/create-new-article', 'ArticleController@store');

Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');

Route::get('/edit-the-articles/{article}', 'ArticleController@edit')->name('articles.edit');
Route::post('/edit-the-articles/{article}', 'ArticleController@update')->name('articles.update');

Route::post('/kick-this-out/{article}', 'ArticleController@destroy')->name('articles.delete');
