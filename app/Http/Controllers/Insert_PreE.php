<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Motif;
use App\Visiteur;
class Insert_PreE extends Controller
{
    public function get_service()
    {
        $service=Service::all();
        $motif=Motif::all();
        return view('zouhir.Visiteur_Pré_Enregistrement',compact('service','motif'));
    }

    public function insert_visiteur(Request $request)
    {
        if ($request->isMethod('POST')) {
            $visiteur = new Visiteur();
            $visiteur->cin = $request->input('Cin');
            $visiteur->nom = $request->input('Nom');
            $visiteur->prenom = $request->input('Prenom');
            $visiteur->email = $request->input('Email');
            $visiteur->tel = $request->input('Tel');
            $visiteur->provenance= $request->input('Provenance');
            $visiteur->motif = $request->input('Motif');
            $visiteur->nom_service = $request->input('Service');
            $visiteur->date_visite = $request->input('DateVisite');
            $visiteur->save();
            return redirect ('visiteur_pe');
        }
    }
   /* function get_motif()
    {
        $motif=Motif::all();
        return view('zouhir.Visiteur_Pré_Enregistrement',compact('motif'));
    }*/
}
