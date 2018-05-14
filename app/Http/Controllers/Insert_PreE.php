<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Motif;
use App\Visiteur;
use App\Visite;
class Insert_PreE extends Controller
{
    public function get_service()
    {
        $service=Service::all();
        $motif=Motif::all();
        return view('zouhir_visiteur.Visiteur_Pré_Enregistrement',compact('service','motif'));
    }

    public function insert_visiteur_visite(Request $request)
    {
        if ($request->isMethod('POST')) {

            /*   remplir table visiteur  */

            $visiteur = new Visiteur();
            $visiteur->cin = $request->input('Cin');
            $visiteur->nom = $request->input('Nom');
            $visiteur->prenom = $request->input('Prenom');
            $visiteur->email = $request->input('Email');
            $visiteur->tel = $request->input('Tel');
            $visiteur->provenance= $request->input('Provenance');
            $visiteur->save();

            /*   remplir table visite  */

            $nom_srvice=$request->input('Service');
            $nom_motif=$request->input('Motif');
            $date=$request->input('DateVisite');
            $motif=Motif::where('motif','=',"$nom_motif")->first();
            $visite=new Visite();
            $visite->cin_visiteur = $visiteur->cin;
            $visite->nom_service = $nom_srvice;
            $visite->nom_motif = $nom_motif;
            $visite->date_visite = $date;
            $visite->id_visiteur = $visiteur->id;
            $visite->id_motif =$motif->id;
            $visite->save();

            return redirect ('visiteur_pe');
        }
    }
   /* function get_motif()
    {
        $motif=Motif::all();
        return view('zouhir_visiteur.Visiteur_Pré_Enregistrement',compact('motif'));
    }*/
}
