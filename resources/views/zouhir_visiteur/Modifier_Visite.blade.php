@extends('zouhir_visiteur.Form_Base')
@section('menu_visiteur')
    <a href="/Mon_Profil/{{$visite->id_visiteur}}"><h6>Mon Profil</h6></a>
    <a href="/mes_visites_get/{{$visite->id_visiteur}}"><h6>Mes Visites</h6></a>
    <a href="/Nouvelle_Visite/{{$visite->id_visiteur}}"><h6>Nouvelle Visite</h6></a>
    <a class="btn btn-primary" href="/visiteur_pe">Deconexion</a>
@endsection
@section('content')
    <script type="text/javascript">
        function verif(argument) {
            return confirm('ETES VOUS SUR ?');
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
                    <form action="/Modifier_Visite_Post/{{$visite->id}}" method="POST" onsubmit="return verif();" >
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <select type="text" name="Service" class="form-control form-control-lg" >
                                  <option>{{$visite->nom_service}}</option>
                                    @foreach($service as $serv)
                                    <option >{{$serv->nom_service}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <select type="text" name="Motif" class="form-control form-control-lg" >
                                    <option >{{$visite->nom_motif}}</option>
                                    @foreach($motif as $moti)
                                        <option >{{$moti->motif}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="date" value="{{$visite->date_visite}}" name="DateVisite" class="form-control form-control-lg">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Modifier</button>
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