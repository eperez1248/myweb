<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


//Route::get('/', function () {return view('hola');});
//Route::get('ID/{id}',function($id){echo 'ID: '.$id;});

//Route::get('/user/{name?}',function($name = 'Pepe'){echo "Name: ".$name;});
//Route::get('/',MiFController::class .'@index')->name('posts.index');
//Route::get('/create',MiFController::class .'@create')->name('posts.create');
//Route::post('/store',MiFController::class .'@store')->name('posts.store');
//Route::get('/{posts}',MiFController::class .'@show')->name('posts.show');
//Route::get('/{posts}/edit',MiFController::class .'@show')->name('posts.edit');
//Route::get('/test', function(){ return view('test',['name'=>'Virat Gandhi']);} );
//Route::get('/blade', function () {return view('pagina',array('name' => 'Virat Gandhi'));});
//Route::get('/',Alumnos::class.'@index');
//Route::get('/', FormController::class. '@index');
//Route::post('/login', FormController::class. '@login')->name('login');

//returns the home page with all posts
Route::get('/',PostController::class .'@index')->name('posts.index');
//returns the form for adding a posts
Route::get('/posts/create',PostController::class .'@create')->name('posts.create');
//adds a post to the database
Route::post('/posts/',PostController::class .'@store')->name('posts.store');
//returns a page that shows a full post
Route::get('/posts/{post}',PostController::class .'@show')->name('posts.show');
//returns the form for editing a posts
Route::get('/posts/{post}/edit',PostController::class .'@edit')->name('posts.edit');
//updates a post
Route::put('/posts/{post}',PostController::class .'@update')->name('posts.update');
//delete a post
Route::delete('/posts/{post}',PostController::class .'@destroy')->name('posts.destroy');

