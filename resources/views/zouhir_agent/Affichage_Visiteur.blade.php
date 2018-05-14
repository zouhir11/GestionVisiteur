
@extends('zouhir_agent.page_master_agent')
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

            <h1 >Liste Des Visites De : {{$visiteur->nom}} {{$visiteur->prenom}} </h1>
            @if(session()->has('confirmer'))
                <div class="alert alert-success">
                    {{ session()->get('confirmer') }}
                </div>
            @endif
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="col-xl-9 mx-auto">
                         <center><h1>Mes Visites</h1></center>
                     </div>-->
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Service</th>
                            <th>Motif</th>
                            <th>Date Visite</th>
                            <th>Etat Visite</th>
                            <th>Affichage</th>
                        </tr>
                        </thead>

                        <body>
                        @foreach($tableau_visite as $Visite)
                            <tr>
                                <td>{{$Visite->nom_service}}</td>
                                <td>{{$Visite->nom_motif}}</td>
                                <td>{{$Visite->date_visite}}</td>
                                <td>{{$Visite->etat_visite}}</td>
                                <td><a href="/afficher_visite/{{$Visite->id}}">Afficher</a></td>
                            </tr>
                        @endforeach
                        </body>
                    </table>

                </div>
            </div>
        </div>
    </header>
@endsection