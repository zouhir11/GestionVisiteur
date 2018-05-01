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


route::get('/test1','test@test1');
route::get('/test2','test@test2');
route::get('/test3','test@test3');
route::get('/test4','test@test4');
route::get('/test5','test@test5');
route::get('/test6','test@test6');
route::get('/test7','test@test7');