@extends('zouhir.Form_Base')
@section('menu_visiteur')
    <a href="Mon_Profil1/{{$visiteur->id}}"><h6>Mon Profil</h6></a>
    <a href="visit3"><h6>Mes Visites</h6></a>
    <a href="Nouvelle_Visite/{{$visiteur->id}}"><h6>Nouvelle Visite</h6></a>
    <a href="visiteur_Auth"></a>
@endsection
@section('content')
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 >Modifier Visite</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="/ajouter_modification_visiteur" method="POST" >
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Nom" value="{{$visiteur->nom}}" class="form-control form-control-lg" placeholder="Nom:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Prenom" value="{{$visiteur->prenom}}" class="form-control form-control-lg" placeholder="Prenom:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Cin" value="{{$visiteur->cin}}" class="form-control form-control-lg" placeholder="Cin:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="email" name="Email" value="{{$visiteur->email}}" class="form-control form-control-lg" placeholder="Email:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Tel" value="{{$visiteur->tel}}" class="form-control form-control-lg" placeholder="Tel:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Provenance" value="{{$visiteur->provenance}}" class="form-control form-control-lg" placeholder="Provenance:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Service" value="{{$visiteur->nom_service}}"  class="form-control form-control-lg" >
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Motif" value="{{$visiteur->motif}}" class="form-control form-control-lg"  >
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <!--<label for="name" class="col-12 col-md-12 mb-2 mb-md-0">Date Visite:</label>-->
                                <input type="date" value="{{$visiteur->date_visite}}" name="DateVisite" class="form-control form-control-lg" placeholder="Date Visite:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Modifier</button><
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