<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/ex1/{id}','DemoController@index')->name('demo');

Route::get('/ex2/{userid?}',function ($userid = '0'){
    return $userid;
});

Route::get('/{userid}/post/{pid}',function ($userid,$pid){
    return $userid."Pid=".$pid;
});

Route::get('/ex3/{id}',function ($id){
    return $id;
}); //->where('id' , '[0-9]+');
Route::get('/ex4/{name}',function ($name){
    return $name;
});
Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

Route::namespace('Admin')->group(function (){
    Route::get('/ex5',function (){
        return 'aaa';
    });
    Route::get('/ex6','AdminController@index');
});
Route::domain('demo.local')->group(function () {
    Route::get('user/{id}', function ( $id) {
        return " Id=".$id;
    });
});

//Route::view($uri, $view);
