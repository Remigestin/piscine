<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Projet Piscine ! </title>

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
                      <li><a href="<?php echo site_url('Admin'); ?>">Informations générales</a></li>

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
                    <h2>Page de gestion</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <p class="text-muted font-13 m-b-30">

                     Informations générales:
                    </p>
        </div>

        <!-- /page content -->
		<ul> Editeurs:
                         <li>Nombre d'éditeurs total: <?php foreach($editeur1 as $temp);echo $temp ;?></li>
                         <li>Nombre d'éditeurs contactés : <?php foreach($editeur2 as $temp);echo $temp ;?></li>
                         <li>Nombre d'éditeurs ayant réservés: <?php foreach($editeur3 as $temp);echo $temp ;?></li>
                         <li>Nombre d'éditeurs ayant annulée : <?php foreach($editeur4 as $temp);echo $temp ;?></li>
						 <li>Nombre d'éditeurs facturés : <?php foreach($editeur5 as $temp);echo $temp ;?></li>
						 <li>Nombre d'éditeurs ayant payé : <?php foreach($editeur6 as $temp);echo $temp ;?></li>

                     </ul>

			<ul> Jeux:
                         <li>Nombre de jeux attendus : <?php foreach($jeu1 as $temp);echo $temp ;?></li>
                         <li>Nombre de jeux reçus : <?php foreach($jeu2 as $temp);echo $temp ;?></li>
                         <li>Nombre de jeux à renvoyer: <?php foreach($jeu3 as $temp);echo $temp ;?></li>
                         <li>Nombre de jeux surdimensionnés : <?php foreach($jeu4 as $temp);echo $temp ;?></li>
						 <li>Nombre de jeux prototypes : <?php foreach($jeu5 as $temp);echo $temp ;?></li>
                     </ul>

			<ul> Frais:
                         <li>Prix des renvois : <?php foreach($frais1 as $temp);echo $temp ;?> euros</li>
                         <li>Somme des prix des réservations : <?php foreach($frais2 as $temp);echo $temp ;?> euros</li>
                     </ul>
                     <br /> <br />
                     <p class="text-muted font-13 m-b-30">
                        Partie Modifications
                     </p>
                     <div class="row x_panel">
                         <div class = "row ">
                             <div class="form-group">
                             <form method='post' action=<?php echo site_url("admin/changeFest") ?>>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12"> Festival courant</label>
                       <div class="col-md-1 col-sm-9 col-xs-12">
                       
                          
                           
                             <select name="festival" class="form-control" required>
                       <?php
                           foreach ($festival as $item) {
                               $selected = "";

                                   if ($item->numFestival == $this->session->festival) {
                                       $selected = "selected";
                                   }

                               echo "<option  $selected value = $item->numFestival>$item->année </option>";
                           }
                           ?>
                            </select>
                           
                       </div>
                        <div class = "col-md-1">
                          <button type = "submit" class="btn btn-default submit">Modifier</button>
                        </div>
                      </form>
                    </div>
                       </div>
                       

                    <br />
                    <div class = "row ">
                      <div class="form-group">
                          <form method="post"action="<?php echo site_url("admin/nbTableMax")?>">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Nombre de Tables</label>
                        <div class="col-md-1 col-sm-9 col-xs-12">
                          <input name="nbTable" type="number" class="form-control" value="<?php echo $courant[0]->nbDemiTableTotal?>">
                        </div>
                        <div class = "col-md-1">
                          <button type = "submit" class="btn btn-default submit">Modifier</button>
                        </div>
                          </form>
                      </div>
                    </div>

                    <br />
                    <div class = "row ">
                      <div class="form-group">
                          <form method="post"action="<?php echo site_url("admin/ajoutType")?>">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Ajouter Type Jeu</label>
                        <div class="col-md-1 col-sm-9 col-xs-12">
                          <input name="libelleType" type="text" class="form-control">
                        </div>
                        <div class = "col-md-1">
                          <button type = "submit" class="btn btn-default submit">Ajouter</button>
                        </div>
                          </form>
                      </div>
                    </div>
                    <br>
                    
                     <div class = "row ">
                             <div class="form-group">
                             <form method='post' action=<?php echo site_url("admin/deleteType") ?>>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12"> Supprimer Type Jeu</label>
                       <div class="col-md-1 col-sm-9 col-xs-12">
                       
                          
                           
                             <select name="numType" class="form-control" required>
                       <?php
                           foreach ($type as $item) {
                               echo "<option  value = $item->numType>$item->libelleType </option>";
                           }
                           ?>
                            </select>   
                       </div>
                        <div class = "col-md-1">
                          <button type = "submit" class="btn btn-default submit">Supprimer</button> 
                        </div>
                      </form>
                    </div>
                 </div>
                  </div>
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
               $('#datatablePiscine').DataTable();
        } );
</script>

  </body>
</html>
