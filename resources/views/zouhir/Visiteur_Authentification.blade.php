@extends('zouhir.Form_Base')
@section('content2')
    <!-- <a class="btn btn-primary" href="visit3">Personnel</a>-->
    <!--Personnel-->-
@endsection
@section('content')
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 >Authentification</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="email" class="form-control form-control-lg" placeholder="Nom">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="email" class="form-control form-control-lg" placeholder="Prenom">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="email" class="form-control form-control-lg" placeholder="Cin:">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Connexion</button>
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