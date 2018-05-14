
@extends('zouhir_visiteur.Form_Base')
@section('menu_visiteur')
    <a href="/Mon_Profil/{{$id}}"><h6>Mon Profil</h6></a>
    <a href="/mes_visites_get/{{$id}}"><h6>Mes Visites</h6></a>
    <a href="/Nouvelle_Visite/{{$id}}"><h6>Nouvelle Visite</h6></a>
    <a class="btn btn-primary" href="/visiteur_pe">Deconexion</a>
@endsection
@section('content')



    <script type="text/javascript">
        function verif(argument) {
            return confirm('are you sur....?');
        }
    </script>

    <header class="masthead text-white text-center">
        <div class="overlay"></div>



        <div class="col-xl-9 mx-auto">
            <br>
            <h1 >Visites En Cours</h1>

            @if(session()->has('delete'))
                <div class="alert alert-success glyphicon-text-size">
                    {{ session()->get('delete') }}
                </div>
            @endif

            @if(session()->has('modifier_visite'))
                <div class="alert alert-success glyphicon-text-size">
                    {{ session()->get('modifier_visite') }}
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
                            <th>Dtae_Visite</th>
                            <th>Modification</th>
                            <th>Annulation</th>
                        </tr>
                        </thead>

                        <body>
                        @foreach($tableau_visite as $vis)
                            <tr>
                                <td>{{$vis->nom_service}}</td>
                                <td>{{$vis->nom_motif}}</td>
                                <td>{{$vis->date_visite}}</td>
                                <td><a href="/Modifier_Visite_Get/{{$vis->id}}">Modifier</a></td>
                                <td><a href="/Annuler_Visite_Get/{{$vis->id}}" onsubmit="return verif();">Annuler</a></td>
                            </tr>
                        @endforeach
                        </body>
                    </table>

                </div>
            </div>
        </div>
    </header>
@endsection