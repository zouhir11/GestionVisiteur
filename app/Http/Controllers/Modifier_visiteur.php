<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visiteur;

class Modifier_visiteur extends Controller
{
    public function get_visiteur(Request $request)
    {
        $ci=$request->input('Cin');
       $visiteur=Visiteur::where('cin',"$ci")->first();
       return view('zouhir.Modifier_Visiteur',compact('visiteur'));
    }

    public function enregistrer_modification_visiteurs(Request $request)
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
            $visiteur->motif = $request->input('Motif');
            $visiteur->nom_service = $request->input('Service');
            $visiteur->date_visite = $request->input('DateVisite');
            $visiteur->save();
        }
            //$visiteur = new Visiteur();
            //$vis=Visiteur::all();
            /*foreach($vis as $visiteur)
            {
                if ($visiteur->cin == $ci) {
                    $visiteur->cin = $request->input('Cin');
                    $visiteur->nom = $request->input('Nom');
                    $visiteur->prenom = $request->input('Prenom');
                    $visiteur->email = $request->input('Email');
                    $visiteur->tel = $request->input('Tel');
                    $visiteur->provenance = $request->input('Provenance');
                    $visiteur->motif = $request->input('Motif');
                    $visiteur->nom_service = $request->input('Service');
                    $visiteur->date_visite = $request->input('DateVisite');
                    $visiteur->save();
                }
            }*/
            return view('zouhir.Visiteur_Authentification');

    }

}
