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


route::get('/test1','insertion@test1');
route::get('/test2','insertion@test2');
route::get('/test3','insertion@test3');
route::get('/test4','insertion@test4');
route::get('/test5','insertion@test5');
route::get('/test6','insertion@test6');
route::get('/test7','insertion@test7');

route::get('/test8','insertion@test8');
route::get('/test9','insertion@test9');


Route::get('/visiteur_pe', function () {
    return view('zouhir.Visiteur_Pré_Enregistrement');
});

Route::get('/visiteur_Auth', function () {
    return view('zouhir.Visiteur_Authentification');
});

Route::get('/Personnel_Auth', function () {
    return view('zouhir.Personnel_Authentification');
});

Route::get('/zz', function () {
    return view('zouhir.');
});