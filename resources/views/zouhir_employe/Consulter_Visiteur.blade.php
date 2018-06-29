
@extends('zouhir_employe.Page_Master_Employe2')
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

            <h1 ><b>Liste Des Visites </b></h1>
            @if(session()->has('confirmer'))
                <div class="alert alert-success">
                    {{ session()->get('confirmer') }}
                </div>
            @endif
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!-- <div class="col-xl-9 mx-auto">
                         <center><h1>Mes Visites</h1></center>
                     </div>-->
                    <center> <div class="box box-primary"> <table class="table table-responsive datatables">
                        <thead>
                        <tr>
                            <th><h4><b>Nom Visiteur</b></h4></th>
                            <th><h4><b>Prenom Visiteur</b></h4></th>
                            <th><h4><b>Provenance Visiteur</b></h4></th>
                            <th><h4><b>Tel Visiteur</b></h4></th>
                            <th><h4><b>Motif</b></h4></th>
                            <th><h4><b>Date Visite</b></h4></th>
                            <th><h4><b>Etat Visite</b></h4></th>
                        </tr>
                        </thead>

                        <body>
                        @foreach($visiteur as $Visiteur)
                        @foreach($visite as $Visite)
                            <?php if($Visiteur->id==$Visite->id_visiteur && $Visite->nom_service==$nom_service) { ?>
                            <tr>
                                <td><h5><b>{{$Visiteur->nom}}</b></h5></td>
                                <td><h5><b>{{$Visiteur->prenom}}</b></h5></td>
                                <td><h5><b>{{$Visiteur->provenance}}</b></h5></td>
                                <td><h5><b>{{$Visiteur->tel}}</b></h5></td>
                                <td><h5><b>{{$Visite->nom_motif}}</b></h5></td>
                                <td><h5><b>{{$Visite->date_visite}}</b></h5></td>

                                <?php
                                if($Visite->etat_visite=="Traitée")
                                { ?>

                                <td><h5><b class="label label-success col-md-8 btn">{{$Visite->etat_visite}}</b></h5></td>
                                <?php }

                                elseif ($Visite->etat_visite=="En Cours")
                                { ?>
                                <td><h5><b class="label label-primary col-md-8 btn">{{$Visite->etat_visite}}</b></h5></td>
                                <?php   }


                                elseif ($Visite->etat_visite=="Terminé")
                                { ?>
                                <td><h5><b class="label label-warning col-md-8 btn">{{$Visite->etat_visite}}</b></h5></td>
                                <?php   }
                                else
                                { ?>
                                <td><h5><b class="label label-danger col-md-8 btn">{{$Visite->etat_visite}}</b></h5></td>
                                <?php
                                }
                                ?>






                            </tr>
                              <?php  }  ?>
                        @endforeach
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