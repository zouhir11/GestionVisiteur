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

class employe_controller extends Controller
{
  public function employe($id)
  {
      $personnel=Personnel::find($id);
      $id_service=$personnel->id_service;
      $service=Service::find($id_service);
      $nom_service=$service->nom_service;
     // $visite2=Visite::where('nom_service','=',"$nom_service");
      //$id_visiteur=$visite2->id_visiteur;
      //$visiteur=Visiteur::find($id_visiteur);


      $tableau_visite=array();
      $tableau_visiteur=array();
      $j=0;
      $i=0;
      $visite=Visite::all();
      $visiteur=Visiteur::all();

     /* foreach ($visite as $Visite)
      {
          if($Visite->nom_service==$nom_service)
          {
              foreach ($visiteur as $Visiteur)
              {
                  if($Visiteur->id==$Visite->id_visiteur)
                  {
                      $tableau_visiteur[$i]==$Visiteur;
                      $i=$i+1;
                  }
              }
              $tableau_visite[$j]=$Visite;
              $j=$j+1;
          }
      }*/

      return view('zouhir_employe.Consulter_Visiteur',compact('visite','visiteur','nom_service'));






  }
}
