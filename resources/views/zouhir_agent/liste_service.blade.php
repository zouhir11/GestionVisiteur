
@extends('zouhir_agent.page_master_agent2')
@section('content1')
    <style type="text/css">
        .rr {
            margin-left: 21%;
        }
        .r2 {
            margin-left: 45%;
        }
        .r3 {
            margin-left: 24%;
        }
    </style>

   <!-- <header class="masthead text-white text-center">-->
        <div class="overlay"></div>
 <div class="col-xl-9 mx-auto  rr">
            <br>
            <h1 ><b class="rr">Liste Des Services</b></h1>
            <br>
        </div>





     <div class="container">
            <div class="row">
                <div class="col-md-9 ">
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
<div class="col-md-8 ">
                     <div class="box box-primary r2">

                   <table class="table table-responsive datatables">
                        <br>
                        <thead>
                        <tr>
                            <th><h4><b>Num_Service</b></h4></th>
                            <th><h4><b>Nom_Service</b></h4></th>
                        
                
                        </tr>
                        </thead>
  
                        <body>
                        @foreach($liste_service as $service)
                            <tr>
                                <td><h5><b>{{$service->num_service}}</b></h5></td>
                                <td><h5><b>{{$service->nom_service}}</b></h5></td>
                
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
    </header>
@endsection