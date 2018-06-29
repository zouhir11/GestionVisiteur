@extends('zouhir_agent.page_master_agent2')
@section('menu_visiteur')
    <a href="/Mon_Profil"><h6>Mon Profil</h6></a>
    <a href="/mes_visites_get"><h6>Mes Visites</h6></a>
    <a href="/Nouvelle_Visite"><h6>Nouvelle Visite</h6></a>
    <a class="btn btn-primary" href="/visiteur_pe">Deconexion</a>
@endsection
@section('content1')




    <script type="text/javascript">
        function verif(argument) {
            return alert('ETES VOUS SUR ?');
        }
    </script>

    <style type="text/css">
        .rr {
            margin-left: 22%;
        }
        .r2 {
            margin-left: 38%;
        }
    </style>

    <table class="r2"><tr><td></td><td>
        <h2><b>Modifier Visite</b></h2>
    </td></tr></table>
<div class="rr">
   <header class="masthead text-white text-center">

        <div class="overlay"></div>
        <div class="container">
            <div class="row">


               <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">


                     <form action="/confirmer_visite/{{$visite->id}}" method="POST" onsubmit="return verif();" >
                        {{ csrf_field() }}
                         <center>  <div class="form-row">




                            <div class="col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Service" value="{{$visite->nom_service}}" class="form-control form-control-lg" >
                            </div>
                            <div class="col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <input type="text" name="Motif"  value="{{$visite->nom_motif}}" class="form-control form-control-lg" >
                            </div>
                            <div class="col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <input type="date" value="{{$visite->date_visite}}" name="Date_Visite" class="form-control form-control-lg">
                            </div>


                            <div class="col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <select name="Employe" class="form-control form-control-lg" >

                                    <option>Chef Service</option>
                                    @foreach($liste_personnel as $Personnel)
                                        <option>{{$Personnel->nom_personnel}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <label for="Etat_Visite"> Etat Visite:</label>
                                <select type="text" name="Etat_Visite"  class="form-control form-control-lg" >
                                    <option>{{$visite->etat_visite}}</option>  <option>Traitée</option>
                                    <option>Terminé</option><option>Annulée</option>
                                </select>
                            </div>


                            <div class="col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <label for="Heure_Entree"> Heure Entree:</label>
                                <input type="time" name="Heure_Entree" value="{{$visite->heure_entree}}" class="form-control form-control-lg" >
                            </div>

                            <div class="form-group col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <label for="Heure_Sortie">Heure Sortie:</label>
                                <input type="time" name="Heure_Sortie" value="{{$visite->heure_sortie}}" class="form-control form-control-lg" >
                            </div>




                         <div class="col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <!--<label for="Droit_Accee"> Les Droits D'accée:</label>-->
                                    <div class="multiselect">
                                        <div class="selectBox" onclick="showCheckboxes()">
                                            <select >
                                                <option>Sélectionner Droits D'accée:</option>
                                            </select>
                                            <div class="overSelect "></div>
                                        </div>
                                        <div id="checkboxes">

                                            @foreach($droit_accee as $droit)
                                                <label for="ss">
                                                <input  type="checkbox"  > :{{$droit->libelle}}</label>
                                            @endforeach

                                        </div>
                                    </div>
                         </div>






                            <div class="col-12 col-md-8 mb-2 mb-md-0">
                                <br>
                                <button type="submit" class="btn btn-block btn-lg btn-primary" >Confirmer</button>
                            </div>
                                 <div class="col-12 col-md-8 mb-2 mb-md-0">
                                     <br>
                                     <button class="btn btn-block btn-lg btn-primary" onclick="PrintElem('test');" >Imprimer</button>
                                 </div>
                            <div class="col-12 col-md-3">
                            </div>


                        </div></center>
                    </form>

                </div>
            </div>
        </div>

    </header>
</div>

    <script>
        function PrintElem(elem)
        {
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

            mywindow.document.write('<html><head><title>' + document.title  + '</title>');
            mywindow.document.write('</head><body >');
            mywindow.document.write('<h1>' + document.title  + '</h1>');
            mywindow.document.write(document.getElementById(elem).innerHTML);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            mywindow.close();

            return true;
        }
    </script>
@endsection