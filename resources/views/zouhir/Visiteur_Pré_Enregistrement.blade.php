@extends('zouhir.Form_Base')
@section('content')
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 >Pré Enregistrement</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="/visiteur_pe" method="POST" >
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Nom" class="form-control form-control-lg" placeholder="Nom:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Prenom" class="form-control form-control-lg" placeholder="Prenom:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Cin" class="form-control form-control-lg" placeholder="Cin:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="email" name="Email" class="form-control form-control-lg" placeholder="Email:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Tel" class="form-control form-control-lg" placeholder="Tel:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Provenance" class="form-control form-control-lg" placeholder="Provenance:">
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