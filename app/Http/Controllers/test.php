<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Droitacce;
use App\Motif;
use App\Personnel;
use App\Role;
use App\Service;
use App\Visite;
use App\Visite_droitacce;
use App\Visite_service;
use App\Visiteur;
class test extends Controller
{
    public function test1()
    {
        $var1=new Droitacce();
        $var1->libelle="libelle1";
        $var1->save();

        $var2=new Droitacce();
        $var2->libelle="libelle2";
        $var2->save();

        $var3=new Droitacce();
        $var3->libelle="libelle3";
        $var3->save();
    }

    public function test2()
    {
         $var1=new Motif();
         $var1->motif='motif1';
         $var1->save();

        $var2=new Motif();
        $var2->motif='motif2';
        $var2->save();

        $var3=new Motif();
        $var3->motif='motif3';
        $var3->save();
    }

    public function test3()
    {
        $var1=new Service();
        $var1->num_service='num1';
        $var1->nom_service='nom1';
        $var1->save();

        $var2=new Service();
        $var2->num_service='num2';
        $var2->nom_service='nom2';
        $var2->save();

        $var3=new Service();
        $var3->num_service='num3';
        $var3->nom_service='nom3';
        $var3->save();
    }

    public function test4()
    {
        $var1 = new Visiteur();
        $var1->cin = 'cin1';
        $var1->nom = 'nom1';
        $var1->prenom = 'prenom1';
        $var1->email = 'email1';
        $var1->tel = 'tel1';
        $var1->provenance = 'prov1';
        $var1->fonction = 'fonction1';
        $var1->save();

        $var2 = new Visiteur();
        $var2->cin = 'cin2';
        $var2->nom = 'nom2';
        $var2->prenom = 'prenom2';
        $var2->email = 'email2';
        $var2->tel = 'tel2';
        $var2->provenance = 'prov2';
        $var2->fonction = 'fonction2';
        $var2->save();

        $var3 = new Visiteur();
        $var3->cin = 'cin3';
        $var3->nom = 'nom3';
        $var3->prenom = 'prenom3';
        $var3->email = 'email3';
        $var3->tel = 'tel3';
        $var3->provenance = 'prov3';
        $var3->fonction = 'fonction3';
        $var3->save();

    }

    public function test5()
    {
        $var1=new Visite();
        $var1->cin='cin1';
        $var1->num_motif='1';
        $var1->date_visite='2018-05-01';
        $var1->heure_entrer='2018-05-01 06:11:12';
        $var1->heure_sortie='2018-05-01 09:11:12';
        $var1->save();

        $var2=new Visite();
        $var2->cin='cin2';
        $var2->num_motif='3';
        $var2->date_visite='1999-02-06';
        $var2->heure_entrer='2018-05-01 06:11:12';
        $var2->heure_sortie='2018-05-01 10:11:12';
        $var2->save();

        $var3=new Visite();
        $var3->cin='cin3';
        $var3->num_motif='2';
        $var3->date_visite='2018-05-01 06:11:12';
        $var3->heure_entrer='2018-05-01 06:11:12';
        $var3->heure_sortie='2018-05-01 09:11:12';
        $var3->save();
    }

    public function test6()
    {
        $var1=new Visite_droitacce();
        $var1->num_droit=1;
        $var1->num_visite=2;
        $var1->save();

        $var2=new Visite_droitacce();
        $var2->num_droit=2;
        $var2->num_visite=2;
        $var2->save();

        $var3=new Visite_droitacce();
        $var3->num_droit=3;
        $var3->num_visite=2;
        $var3->save();
    }
    public function test7()
    {
        $var1=new Visite_service();
        $var1->num_service="num2";
        $var1->num_visite=1;
        $var1->save();

        $var2=new Visite_service();
        $var2->num_service="num1";
        $var2->num_visite=2;
        $var2->save();

        $var3=new Visite_service();
        $var3->num_service="num3";
        $var3->num_visite=3;
        $var3->save();
    }
}
