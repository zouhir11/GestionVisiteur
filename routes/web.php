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


route::get('/insert1','insertion@test1');
route::get('/insert2','insertion@test2');
route::get('/insert3','insertion@test3');
route::get('/insert4','insertion@test4');
route::get('/insert5','insertion@test5');
route::get('/insert6','insertion@test6');
route::get('/insert7','insertion@test7');

route::get('/insert8','insertion@test8');
route::get('/insert9','insertion@test9');


Route::get('/visiteur_pe', function () {
    return view('zouhir.Visiteur_Pré_Enregistrement');
});

Route::get('/visiteur_Auth', function () {
    return view('zouhir.Visiteur_Authentification');
});

Route::get('/Personnel_Auth', function () {
    return view('zouhir.Personnel_Authentification');
});

route::get('/visiteur_pe','Insert_PreE@get_service');
route::get('/visiteur_pe','Insert_PreE@get_service');
route::POST('/visiteur_pe','Insert_PreE@insert_visiteur');
//route::get('/visiteur_pe','Insert_PreE@get_motif');

Route::POST('/modifier_visiteur','Modifier_visiteur@get_visiteur');

Route::POST('/ajouter_modification_visiteur','Modifier_visiteur@enregistrer_modification_visiteurs');