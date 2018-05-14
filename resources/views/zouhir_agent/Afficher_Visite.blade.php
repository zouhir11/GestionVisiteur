@extends('zouhir_agent.page_master_agent')
@section('menu_visiteur')
    <a href="/Mon_Profil"><h6>Mon Profil</h6></a>
    <a href="/mes_visites_get"><h6>Mes Visites</h6></a>
    <a href="/Nouvelle_Visite"><h6>Nouvelle Visite</h6></a>
    <a class="btn btn-primary" href="/visiteur_pe">Deconexion</a>
@endsection
@section('content1')
    <script type="text/javascript">
        function verif(argument) {
            return confirm('are you sur....?');
        }
    </script>

    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 >Modifier Visite</h1>

                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="/confirmer_visite/{{$visite->id}}" method="POST" onsubmit="return verif();" >
                        {{ csrf_field() }}
                        <div class="form-row">


                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Service" value="{{$visite->nom_service}}" class="form-control form-control-lg" >
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Motif"  value="{{$visite->nom_motif}}" class="form-control form-control-lg" >
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="date" value="{{$visite->date_visite}}" name="Date_Visite" class="form-control form-control-lg">
                            </div>


                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <select name="Employe" class="form-control form-control-lg" >

                                    <option>Chef Service</option>
                                    @foreach($liste_personnel as $Personnel)
                                        <option>{{$Personnel->nom_personnel}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <label for="Heure_Entree"> Heure Entree:</label>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <input type="datetime-local" name="Heure_Entree" value="{{$visite->heure_entree}}" class="form-control form-control-lg" >
                            </div>
                            <br>
                            <label for="Heure_Sortie">Heure Sortie:</label>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <input type="datetime-local" name="Heure_Sortie" value="{{$visite->heure_sortie}}" class="form-control form-control-lg" >
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <select type="text" name="Etat_Visite"  class="form-control form-control-lg" >
                                    <option>{{$visite->etat_visite}}</option>  <option>Traitée</option>
                                    <option>Terminé</option><option>Annulée</option>
                                </select>
                            </div>



                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Confirmer</button>
                            </div>
                            <div class="col-12 col-md-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
@endsection