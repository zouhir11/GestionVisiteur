
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
            <h1 >Liste Des Visiteurs</h1>
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
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Provenance</th>
                            <th>Affichage</th>
                        </tr>
                        </thead>

                        <body>
                        @foreach($liste_visiteur as $visiteur)
                            <tr>
                                <td>{{$visiteur->nom}}</td>
                                <td>{{$visiteur->prenom}}</td>
                                <td>{{$visiteur->email}}</td>
                                <td>{{$visiteur->tel}}</td>
                                <td>{{$visiteur->provenance}}</td>
                                <td><a href="/afficher_visiteur/{{$visiteur->id}}">Afficher</a></td>
                            </tr>
                        @endforeach
                        </body>
                    </table>

                </div>
            </div>
        </div>
    </header>
@endsection