<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MiFController;
use App\Http\Controllers\Alumnos;
use App\Http\Controllers\FormController;


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


Route::get('/',PostController::class .'@index')->name('posts.index');
Route::get('/posts/create',PostController::class .'@create')->name('posts.create');
Route::post('/posts/',PostController::class .'@store')->name('posts.store');
Route::get('/posts/{posts}/show',PostController::class .'@show')->name('posts.show');
Route::get('/posts/{posts}/edit',PostController::class .'@edit')->name('posts.edit');
Route::put('/posts/{posts}',PostController::class .'@update')->name('posts.update');
Route::delete('/posts/{posts}/destroy',PostController::class .'@destroy')->name('posts.destroy');

