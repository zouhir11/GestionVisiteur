
@extends('zouhir_agent.page_master_agent2')
@section('content1')
    <style type="text/css">
        .rr {
            margin-left: 21%;
        }
        .r2 {
            margin-left: 43%;
        }
        .r3 {
            margin-left: 36%;
        }
    </style>

   <!-- <header class="masthead text-white text-center">-->
        <div class="overlay"></div>
 <div class="col-xl-9 mx-auto  rr">
            <br>
            <h1 ><b class="rr">Liste Des Employes</b></h1>
            <br>
        </div>





     <div class="container">
            <div class="row">
                <div class="col-md-8 ">
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










<br>
<center> <div class="col-md-10 ">

                     <div class="box box-primary r2">

                   <table class="table datatables" id="test">
                        <br>
                        <thead>
                        <tr>
                            <th><h4><b>Nom</b></h4></th>
                            <th><h4><b>Prenom</b></h4></th>
                            <th><h4><b>Type</b></h4></th>
                            <th><h4><b>Email</b></h4></th>
                
                        </tr>
                        </thead>
  
                        <body>
                        @foreach($liste_employe as $employe)
                            <tr>
                                <td><h5><b>{{$employe->nom_personnel}}</b></h5></td>
                                <td><h5><b>{{$employe->prenom_personnel}}</b></h5></td>
                                <td><h5><b>{{$employe->type_personnel}}</b></h5></td>
                                <td><h5><b>{{$employe->email}}</b></h5></td>
                            </td>
                
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
        <button class="btn" onclick="PrintElem('test');">Imprimer</button>
    </header>

@endsection

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