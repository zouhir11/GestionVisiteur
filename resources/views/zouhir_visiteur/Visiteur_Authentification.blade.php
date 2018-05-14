@extends('zouhir_visiteur.Form_Base')
@section('content')

    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 >Authentification</h1>

                    @if(session()->has('authentification'))
                        <div class="alert alert-danger">
                            {{ session()->get('authentification') }}
                        </div>
                    @endif


                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="/mes_visites" method="POST">
                        {{ csrf_field() }}

                        <div class="form-row @if(count($errors->get('Email'))) has-error @endif">
                               <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="email" name="Email" value="{{old('Email')}}" class="form-control form-control-lg"
                                       placeholder="Email:">
<div class="alert-danger">
                                @if(count($errors->get('Email')))
                                            @foreach($errors->get('Email') as $err)
                                                <li>
                                                    {{$err}}
                                                </li>
                                            @endforeach
                                @endif
</div>
                               </div>




                            <div class="col-12 col-md-12 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Cin" value="{{old('Cin')}}" class="form-control form-control-lg" placeholder="Cin:">
<div class="alert-danger">
                                @if(count($errors->get('Cin')))
                                    @foreach($errors->get('Cin') as $err)
                                        <li>
                                            {{$err}}
                                        </li>
                                    @endforeach
                                @endif
</div>

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