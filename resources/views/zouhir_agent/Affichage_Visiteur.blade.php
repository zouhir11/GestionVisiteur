
@extends('zouhir_agent.page_master_agent2')
@section('menu_visiteur')
    <a href="/Mon_Profil"><h6>Mon Profil</h6></a>
    <a href="/mes_visites_get"><h6>Mes Visites</h6></a>
    <a href="/Nouvelle_Visite"><h6>Nouvelle Visite</h6></a>
    <a class="btn btn-primary" href="/visiteur_pe">Deconexion</a>
@endsection
@section('content1')

    <header class="masthead text-white text-center">
        <div class="overlay"></div>

        <div class="col-xl-9 mx-auto">
            <br>
            <h1 ><b>Liste Des Visites De : {{$visiteur->nom}} {{$visiteur->prenom}} </b></h1>
            @if(session()->has('confirmer'))
                <div class="alert alert-success">
                    {{ session()->get('confirmer') }}
                </div>
            @endif
            <br><br>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!-- <div class="col-xl-9 mx-auto">
                         <center><h1>Mes Visites</h1></center>
                     </div>-->





                    <center>   <div class="box box-primary ">

                <table class="table ">
                        <thead>
                        <tr>
                            <th><h4><b>Service</b></h4></th>
                            <th><h4><b>Motif</b></h4></th>
                            <th><h4><b>Date Visite</b></h4></th>
                            <th><h4><b>Etat Visite</b></h4></th>
                            <th><h4><b>Affichage</b></h4></th>
                        </tr>
                        </thead>

                        <body>
                        @foreach($tableau_visite as $Visite)
                            <tr>
                                <td><h5><b>{{$Visite->nom_service}}</b></h5></td>
                                <td><h5><b>{{$Visite->nom_motif}}</b></h5></td>
                                <td><h5><b>{{$Visite->date_visite}}</b></h5></td>

                                <?php
                                if($Visite->etat_visite=="Traitée")
                                    { ?>

                                <td><h5><b class="label label-success col-md-4 btn">{{$Visite->etat_visite}}</b></h5></td>
                                   <?php }

                                elseif ($Visite->etat_visite=="En Cours")
                                { ?>
                                <td><h5><b class="label label-primary col-md-4 btn">{{$Visite->etat_visite}}</b></h5></td>
                                <?php   }


                                   elseif ($Visite->etat_visite=="Terminé")
                                   { ?>
                                <td><h5><b class="label label-warning col-md-4 btn">{{$Visite->etat_visite}}</b></h5></td>
                                <?php   }
                                      else
                                          { ?>
                                  <td><h5><b class="label label-danger col-md-4 btn">{{$Visite->etat_visite}}</b></h5></td>
                                <?php
                                }
                                ?>

                                <td><a href="/afficher_visite/{{$Visite->id}}"><h5><b  class="label label-primary col-md-4 btn">Afficher</b></h5></a></td>
                            </tr>
                        @endforeach
                        </body>
                    </table>
                </div>

            </center>
                </div>
            </div>
        </div>
    </header>
@endsection