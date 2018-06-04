
@extends('zouhir_agent.page_master_agent2')
@section('content1')
    <style type="text/css">
        .rr {
            margin-left: 20%;
        }
        .r2 {
            margin-left: 38%;
        }
    </style>

   <!-- <header class="masthead text-white text-center">-->
        <div class="overlay"></div>
 <div class="col-xl-9 mx-auto  rr">
            <br>
            <h1 ><b class="rr">Liste Des Visiteurs</b></h1>
            <br>
        </div>





     <div class="container">
            <div class="row">
                <div class="col-md-11 ">
                    <!-- <div class="col-xl-9 mx-auto">
                         <center><h1>Mes Visites</h1></center>
                     </div>-->




    <!--  <table>

       <tr >

             <div class="col-12 col-md-12 mb-2 mb-md-0">
                 <td><label for="nom_visiteur_chercher" >Nom Visiteur:</label></td>
             </div>
             <td>
                 <div class="col-12 col-md-12 mb-2 mb-md-0">
                     <input type="text" name="nom_visiteur_chercher"   class="form-control form-control-lg" >
                 </div>
             </td>
             <td>
                 <div class="col-12 col-md-12 mb-2 mb-md-0">
                     <button type="submit" class="btn btn-block btn-lg btn-primary" >Chercher</button>
                 </div>
             </td>
         </tr>
         <tr></tr>
    </table>-->

  <center>
                     <div class="box box-primary">

                   <table class="table table-responsive datatables">
                        <br>
                        <thead>
                        <tr>
                            <th><h4><b>Nom</b></h4></th>
                            <th><h4><b>Prenom</b></h4></th>
                            <th><h4><b>Email</b></h4></th>
                            <th><h4><b>Tel</b></h4></th>
                            <th><h4><b>Provenance</b></h4></th>
                            <th><h4><b>Affichage</b></h4></th>
                        </tr>
                        </thead>

                        <body>
                        @foreach($liste_visiteur as $visiteur)
                            <tr>
                                <td><h5><b>{{$visiteur->nom}}</b></h5></td>
                                <td><h5><b>{{$visiteur->prenom}}</b></h5></td>
                                <td><h5><b>{{$visiteur->email}}</b></h5></td>
                                <td><h5><b>{{$visiteur->tel}}</b></h5></td>
                                <td><h5><b>{{$visiteur->provenance}}</b></h5></td>
                                <td><a href="/afficher_visiteur/{{$visiteur->id}}"><h5><b class="label label-primary col-md-7 btn">Afficher</b></h5></a></td>
                            </tr>
                        @endforeach
                        </body>
                    </table>
               </div>
                </center>

                    </form>

                </div>
            </div>
        </div>
    </header>
@endsection
