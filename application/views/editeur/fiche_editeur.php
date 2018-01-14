<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Projet Piscine!  </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url() ?>gentelella-master/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url() ?>gentelella-master/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url() ?>gentelella-master/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url() ?>gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>gentelella-master/build/css/custom.min.css" rel="stylesheet">



    <!-- Datatables -->
    <link href="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-home"></i> <span>Festival du Jeu!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">

              <div class="profile_info">

                <h4>ANNEE: <?php echo $this->session->anneeFestival ?></h4>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Options</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-table"></i> Les differents tableaux <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('Jeu'); ?>">Liste des Jeux</a></li>
                      <li><a href="<?php echo site_url('Suivi'); ?>"> Suivi</a></li>
                      <li><a href="<?php echo site_url('Zone'); ?>">Zone</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-wrench"></i> Gestion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('editeur'); ?>">Liste des Editeurs</a></li>
                      <li><a href="<?php echo site_url('Admin'); ?>">Informations générles</a></li>

                    </li>

              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">


              <a data-toggle="tooltip"  href="<?php echo site_url("utilisateur/deconnected") ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->

          </div>
        </div>

         <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src alt=""><?php echo $this->session->login ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>

                    <li><a href="<?php echo site_url("utilisateur/deconnected") ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><?php echo $editeur[0]->nomEditeur ?></h3>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                           <div class="col-md-2 ">
                      <h2>Adresse <a class="glyphicon glyphicon-edit" href="<?php $id = $editeur[0]->numEditeur; echo site_url("editeur/modifier/$id/1")?>"></a></h2>
                     <ul>
                         <li>Rue : <?php echo $editeur[0]->rueEditeur ?></li>
                         <li>Ville : <?php echo $editeur[0]->villeEditeur ?></li>
                         <li>Code Postale : <?php echo $editeur[0]->cpEditeur ?></li>
                     </ul>
                           </div>
                      </div>
                         <?php

                        $numEditeur = $editeur[0]->numEditeur;
                        $lien = site_url("contact/creer/$numEditeur/1");
                      echo <<<EOT
                        <h2>Contacts   <a class="glyphicon glyphicon-plus-sign" href="$lien"></a></h2>
EOT;
                      ?>
                      <div class="row">
                       <?php
                          $i = 1;

                          foreach($contact as $item) {
                              $numContact = $item->numContact;
                              $lien2 = site_url("contact/modifier/$numContact/1");
                              echo <<<EOT

                          <div class="col-md-2">
                              <h2>Contact n°$i <a class="glyphicon glyphicon-edit" href="$lien2"></a></h2>
                     <ul>
                         <li>Nom : $item->nomContact
                         <li>Prénom : $item->prenomContact
                         <li>Mail : $item->mailContact
                         <li>Téléphone : $item->telContact
                     </ul>
                          </div>
EOT;
                              $i++;
                                      }

                                      ?>
                      </div>
                      <h2>Suivi <a class="glyphicon glyphicon-edit" href=""></a> </h2>
                      <br>
                      <div class="row x_panel">


                       <div class="col-md-1 " >
                      Contacté :  <?php echo $suivi[0]->contacte?>
                       </div>

                           <div class="col-md-1 " >
                      A répondu :  <?php echo $suivi[0]->reponse?>
                       </div>

                        <div class="col-md-1 " >
                      Présent :  <?php echo $suivi[0]->presentAuFestival?>
                       </div>

                           <div class="col-md-1 " >
                      Facturé :  <?php echo $suivi[0]->facture?>
                       </div>
                           <div class="col-md-1 " >
                      A payé :  <?php echo $suivi[0]->paiement?>
                       </div>

                       <div class="col-md-1 ">
                      Annulé : <?php echo $suivi[0]->annule ?>
                       </div>

                       <div class="col-md-2 " >
                      Dernière date de contact :  <?php echo $suivi[0]->derniereDateContact?>
                       </div>

                          <div class="col-md-2 " >
                      Dernière date de réponse :  <?php echo $suivi[0]->derniereDateReponse?>
                       </div>



                      </div>

                      <br>
                      <h2>Commentaires </h2>

                         <div class="row x_panel">
                             <div >
                                 <form method="post" action="<?php $id = $suivi[0]->numSuivi; $idEditeur = $editeur[0]->numEditeur; echo site_url("editeur/commentaire/$id/$idEditeur")?>">
                                     <textarea name="commentaire"><?php echo $suivi[0]->commentaire ?></textarea>
                                     <button type = "submit" class="btn btn-default submit">Modifier</button>
                                 </form>
                             </div>
                         </div>
                      <h2>Réservations   <a class="glyphicon glyphicon-plus-sign" href=""></a></h2>
                      <div class="row x_panel">
                        <br>
                          <ul>
                            <?php
                            $i = 1;
foreach ($reservation as $item) {
    $lien = site_url("concerner/creer");
    $lien2 = site_url("editeur/nbTable");
    $idEditeur= $editeur[0]->numEditeur;
    echo <<<EOT
        <div class="row x_panel">
        <li><h2>Reservation n°$i <a class="glyphicon glyphicon-edit" href=""></a></h2></li>
        <ul>
            <form method="post" action=$lien2>
            <input name="numReservation" type="hidden" value=$item->numReservation>
            <input name="numEditeur" type="hidden" value=$idEditeur>
            <li>Nombre de tables  : <input name = "nbTable" type="number" value=$item->nbTable></input> <button type = "submit" class="btn btn-default submit">Modifier</button></li>
            <li>Zone : $item->nomZone </li>
            </form>
        </ul>
            <br>
            <form method='post' action=$lien> 
            <input name="numReservation" type="hidden" value=$item->numReservation>
            <div class="col-md-2">
            <select name="numJeu" class="form-control" required>
EOT;
    foreach ($jeuNotInReservation[$i-1] as $item3) {
       
          echo "<option value = $item3->numJeu>$item3->nomJeu</option>";
    }
    
    
    echo <<<EOT

   
             </select>
            </div>
            <div class = "col-md-1">
              <button type = "submit" class="btn btn-default submit">Ajouter</button>
            </div>
            </form>
        <br>

             <table id="datatablePiscine$i" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nom du Jeu</th>
                          <th>Type de Jeu</th>
                          <th>Quantité</th>
                          <th>Arrivé</th>
                          <th>A renvoyé</th>
                          <th>Surdimension</th>
                          <th>Prix de Renvoi</th>
                          <th>Prototype</th>
                        </tr>
                      </thead>
EOT;






foreach ($jeuReservation[$i-1] as $item2) {
    $idJeu = $item2->numJeu;
    $idRes = $item2->numReservation;
    
    $lien = site_url("concerner/modifier/$idJeu/$idRes");
    echo <<<EOT
    <tr>

        <td><a href=$lien>$item2->nomJeu</a></td>
        <td>$item2->libelleType</td>
        <td>$item2->quantiteJeu</td>
        <td>$item2->arrive</td>
        <td>$item2->aRenvoyer</td>
        <td>$item2->surdimension</td>
        <td>$item2->prixRenvoi</td>
        <td>$item2->prototype</td>
     </tr>
EOT;
}

                echo    "</table></div>";
    $i++;
}
?>

                    </ul>
                  </div>


                    <h2>Jeux   <a class="glyphicon glyphicon-plus-sign " href="<?php $id= $editeur[0]->numEditeur; echo site_url("jeu/creer/$id/1")?>" ></a></h2>

                    <div class="row x_panel">
                    <table id="datatableJeu" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nom du Jeu</th>
                          <th>Type de Jeu</th>

                        </tr>
                      </thead>
                        <?php
foreach ($jeu as $item) {
    $id = $item->numJeu; 
    $lien = site_url("jeu/modifier/$id/1");
    echo <<<EOT
    <tr>

        <td><a href="$lien">$item->nomJeu</a></td>
        <td>$item->libelleType</td>
     </tr>
EOT;
}

?>
                    </table>
                  </div>
                  </div>
            </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>gentelella-master/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>gentelella-master/build/js/custom.min.js"></script>
    <script>
        $(document).ready(function() {
               $('#datatableJeu').DataTable();
        } );
</script>
    <?php
    $i = 1;
foreach ($reservation as $item) {
    echo <<<EOT
    <script>
        $(document).ready(function() {
               $('#datatablePiscine$i').DataTable();
        } );
</script>
EOT;
    $i++;
}

    ?>


  </body>
</html>
