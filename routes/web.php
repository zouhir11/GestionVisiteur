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

/* ----------------------------------------------ROUTE ZOUHIR-------------------------------------------*/

/* -----------------------------------------test d'insertion avec des methodes -------------------------*/

route::get('/insert1','insertion@test1');
route::get('/insert2','insertion@test2');
route::get('/insert3','insertion@test3');
route::get('/insert4','insertion@test4');
route::get('/insert5','insertion@test5');
route::get('/insert6','insertion@test6');
route::get('/insert7','insertion@test7');
route::get('/insert8','insertion@test8');
route::get('/insert9','insertion@test9');

/* --------------------------------------------------Fin TEST--------------------------------------------*/

/* -----------------------------------------test d'insertion avec des methodes --------------------------*/

Route::get('/visiteur_pe', function () {
    return view('zouhir.Visiteur_Pré_Enregistrement');
});

Route::get('/visiteur_Auth', function () {
    return view('zouhir.Visiteur_Authentification');
});

/* -----------------------------------------Pré Enregistremet---------------------------------------------*/

route::get('/visiteur_pe','Insert_PreE@get_service');
route::get('/visiteur_pe','Insert_PreE@get_service');
//route::POST('/visiteur_pe','Insert_PreE@insert_visiteur');
route::POST('/insert_visiteur_visite','Insert_PreE@insert_visiteur_visite');

/* -----------------------------------------FIN Pré Enregistremet ----------------------------------------*/

/* ---------------------------------------AUTHENTIFICATION VISITEUR --------------------------------------*/

Route::POST('/autentifier_visiteur','Modifier_visiteur@autentifier_visiteur');
//Route::POST('/mes_visites','Modifier_visiteur@mes_visites');

/* -----------------------------------FIN AUTHENTIFICATION VISITEUR---------------------------------------*/

/* ---------------------------------------MODIFIER PROFIL VISITEUR --------------------------------------*/

Route::POST('/ajouter_modification_visiteur','Modifier_visiteur@enregistrer_modification_visiteurs');
Route::Post('/modifier_profil','Modifier_visiteur@modifier_profil');
Route::get('Mon_Profil1/{id}','Modifier_visiteur@Mon_Profil');

/* -----------------------------------FIN MODIFIER PROFIL VISITEUR----------------------------------------*/

/* -------------------------------------AJOUTER NOVELLE VISITE--------------------------------------------*/

Route::get('Nouvelle_Visite/{id}','Modifier_visiteur@Nouvelle_Visite');
Route::Post('/ajouter_nouvelle_visite/{id}','Modifier_visiteur@ajouter_nouvelle_visite');

/* -----------------------------------FIN AJOUTER NOVELLE VISITE------------------------------------------*/

/*---------------------------------------------FIN ROUTE ZOUHIR-------------------------------------------*/