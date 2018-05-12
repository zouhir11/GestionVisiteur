@extends('zouhir.Form_Base')
@section('content')

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
                    <h1 >Ajouter Votre Nouvelle Visite Mr:</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="/ajouter_nouvelle_visite/{{$visiteur->id}}" method="POST" onsubmit="return verif();" >
                        {{ csrf_field() }}
                        <div class="form-row">

                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <div class="col-xl-9 mx-auto">
                                    <h1 >{{$visiteur->nom}} {{$visiteur->prenom}}</h1>
                                </div>
                                <!--<input type="text" name="Nom" value="{{$visiteur->nom}}" class="form-control form-control-lg" placeholder="Nom:">-->
                            </div>

                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <!--<input type="text" class="form-control form-control-lg" placeholder="Service:">-->
                                <select name="Service" class="form-control form-control-lg" placeholder="Service:" >
                                    @foreach($service as $srv)
                                        <option>{{$srv->nom_service}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <!--<input type="option" class="form-control form-control-lg" placeholder="Motif:">-->
                                <select name="Motif" class="form-control form-control-lg" placeholder="Motif:" >
                                    @foreach($motif as $motf)
                                        <option>{{$motf->motif}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <!--<label for="name" class="col-12 col-md-12 mb-2 mb-md-0">Date Visite:</label>-->
                                <input type="date" name="DateVisite" class="form-control form-control-lg" placeholder="Date Visite:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Enregistrement</button>
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