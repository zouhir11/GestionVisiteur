<?php

namespace App\Http\Controllers;
use App\Droitacce;
use App\Motif;
use App\Personnel;
use App\Role;
use App\Service;
use App\Visite;
use App\Visite_droitacce;
use App\Visite_service;
use App\Visiteur;
use Illuminate\Http\Request;

class Agent_controller extends Controller
{



    public function liste_pre_enregistrement()
    {
        $liste_visiteur=Visiteur::all();
        return view('zouhir_agent.Liste_Pre_Enregistrement',compact('liste_visiteur'));

    }




    public function afficher_visiteur($id)
    {
        $visiteur=Visiteur::find($id);

        $tableau_visite=array();
        $j=0;
        $visite=Visite::all();

        foreach ($visite as $Visite)
        {
            if($Visite->id_visiteur==$id)
            {
                $tableau_visite[$j]=$Visite;
                $j=$j+1;
            }
        }

        return view('zouhir_agent.Affichage_Visiteur',compact('visiteur','tableau_visite'));
    }



    public function afficher_visite($id)
    {
        $visite=Visite::find($id);
        $droit_accee=Droitacce::all();
        $nom_service=$visite->nom_service;
        $service=Service::where('nom_service','=',"$nom_service")->first();
        $id_service=$service->id;
        //$personnel=Personnel::where('id_service',"=",$id_service);

        $liste_personnel=array();
        $j=0;
        $personnel=Personnel::all();

        foreach ($personnel as $Personnel)
        {
            if($Personnel->id_service==$id_service)
            {
                $liste_personnel[$j]=$Personnel;
                $j=$j+1;
            }
        }

        return view('zouhir_agent.Afficher_Visite',compact('visite','liste_personnel','droit_accee'));
    }





    public function confirmer_visite(Request $request,$id)
    {
        $visite=Visite::find($id);

        $visite->nom_service=$request->input('Service');
        $visite->etat_visite=$request->input('Etat_Visite');
        $visite->nom_motif=$request->input('Motif');
        $visite->employe=$request->input('Employe');
        $visite->date_visite=$request->input('Date_Visite');
        $visite->heure_entree=$request->input('Heure_Entree');
        $visite->heure_sortie=$request->input('Heure_Sortie');
        $visite->save();
        session()->flash('confirmer','-------------------------LA VISITE EST CONFIRME-----------------------');
        return redirect('/agent1');
    }

}
