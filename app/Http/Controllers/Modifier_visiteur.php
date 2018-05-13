<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visiteur;
use App\Service;
use App\Visite;
use App\Motif;

class Modifier_visiteur extends Controller
{

    /* -----------------------------------------MODIFIER VISITE-----------------------------------------*/

    public function Modifier_Visite_Get($id)
    {
        $visite=Visite::find($id);
        $service=Service::all();
        $motif=Motif::all();
       return view('zouhir.Modifier_Visite',compact('visite','service','motif'));
    }

    public function Modifier_Visite_Post(Request $request,$id)
    {
        if ($request->isMethod('POST'))
        {
            $visite=Visite::find($id);
            $visite->nom_service = $request->input('Service');
            $visite->nom_motif = $request->input('Motif');
            $visite->date_visite = $request->input('DateVisite');
            $visite->save();
            /*$service=Service::all();
            $motif=Motif::all();
            return view('zouhir.Modifier_Visite',compact('visite','service','motif'));*/

            $tableau_visite=array();
            $j=0;
            $visite=Visite::all();
            foreach ($visite as $Visite)
            {
                if($Visite->id_visiteur==$id && $Visite->etat_visite=="En Cours")
                {
                    $tableau_visite[$j]=$Visite;
                    $j=$j+1;
                }
            }
            return view('zouhir.Mes_Visites',compact('tableau_visite','id'));
        }

    }

    /* -----------------------------------------FIN MODIFIER VISITE -----------------------------------------*/



    /* --------------------------------------------MES VISITES ------------------------------------------------*/

    public function mes_visites(Request $request)
    {
        $ci=$request->input('Cin');
        $em=$request->input('Email');

        $visiteur=Visiteur::all();
        $visite=Visite::all();

        $tableau_visite=array();
        $j=0;
        $i=0;
        foreach ($visiteur as $Visiteur)
        {
            if($Visiteur->cin==$ci && $Visiteur->email==$em)
            {
                $i=1;
                $id=$Visiteur->id;
                foreach ($visite as $Visite)
                {
                    if($Visite->id_visiteur==$id && $Visite->etat_visite=="En Cours")
                    {
                        $tableau_visite[$j]=$Visite;
                        $j=$j+1;
                    }
                }
                return view('zouhir.Mes_Visites',compact('tableau_visite','id'));
            }
        }
        if ($i==0){echo "email ou cin incorrect";}


    }

    public function mes_visites_get($id)
    {
        $tableau_visite=array();
        $j=0;
        $visite=Visite::all();
                foreach ($visite as $Visite)
                {
                    if($Visite->id_visiteur==$id && $Visite->etat_visite=="En Cours")
                    {
                        $tableau_visite[$j]=$Visite;
                        $j=$j+1;
                    }
                }
                return view('zouhir.Mes_Visites',compact('tableau_visite','id'));
    }

    /* ------------------------------------------FIN MES VISITES --------------------------------------------*/


    /* ---------------------------------------MODIFIER PROFIL VISITEUR --------------------------------------*/

    public function Mon_Profil($id)
    {
        $visiteur=Visiteur::find($id);
        return view('zouhir.Mon_Profil',compact('visiteur'));
    }

    public function Modifier_Profil(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $ci = $request->input('Cin');
            $visiteur = Visiteur::where('cin', "$ci")->first();

            $visiteur->cin = $request->input('Cin');
            $visiteur->nom = $request->input('Nom');
            $visiteur->prenom = $request->input('Prenom');
            $visiteur->email = $request->input('Email');
            $visiteur->tel = $request->input('Tel');
            $visiteur->provenance = $request->input('Provenance');
            $visiteur->save();
            return view('zouhir.Mon_Profil',compact('visiteur'));
        }
    }

    /* ------------------------------------FIN MODIFIER PROFIL VISITEUR -------------------------------------*/


    /* -------------------------------------AJOUTER NOVELLE VISITE-------------------------------------------*/

    public function Nouvelle_Visite($id)
    {
        $service=Service::all();
        $motif=Motif::all();
        //$cin=$request->input('Cin');
        $visiteur=Visiteur::find($id);
        return view('zouhir.Nouvelle_Visite',compact('visiteur','service','motif'));
    }

   /* public function Nouvelle_Visite_post($id)
    {
        $service=Service::all();
        $motif=Motif::all();

        $visiteur=Visiteur::find($id);
        return view('zouhir.Nouvelle_Visite',compact('visiteur','service','motif'));
    }*/

    public function Nouvelle_Visite_post(Request $request,$id)
    {
            if ($request->isMethod('POST'))
            {
                $service=Service::all();
                $motif=Motif::all();

            $nom_srvice=$request->input('Service');
            $nom_motif=$request->input('Motif');
            $date=$request->input('DateVisite');


            $visiteur=Visiteur::find($id);
            //$service=Service::where('nom_service','=',"$nom_srvice");
            $motif2=Motif::where('motif','=',"$nom_motif")->first();

            $visite=new Visite();

            $visite->cin_visiteur = $visiteur->cin;
            $visite->nom_service = $nom_srvice;
            $visite->nom_motif = $nom_motif;
            $visite->date_visite = $date;
            $visite->id_visiteur = $visiteur->id;
            $visite->id_motif =$motif2->id;

            $visite->save();

            return view('zouhir.Nouvelle_Visite',compact('visiteur','service','motif'));
       }
    }

    /* -------------------------------------FIN AJOUTER NOVELLE VISITE--------------------------------------------*/



    /*------------------------------------------ANNULER VISITE-------------------------------------------------*/

      public function Annuler_Visite_Get($id)
      {

          $visite=Visite::find($id);
          $id=$visite->id_visiteur;
          $visite->delete();


          //redirect('/mes_visites_get/{i}');

          $tableau_visite=array();
          $j=0;
          $visite=Visite::all();
          foreach ($visite as $Visite)
          {
              if($Visite->id_visiteur==$id && $Visite->etat_visite=="En Cours")
              {
                  $tableau_visite[$j]=$Visite;
                  $j=$j+1;
              }
          }
          return view('zouhir.Mes_Visites',compact('tableau_visite','id'));
      }

    /*-------------------------------------------FIN ANNULER VISITE---------------------------------------------*/


}
