<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Projet Piscine! </title>

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
              <a class="site_title"><i class="fa fa-home"></i> <span>Festival du Jeu !</span></a>
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
                    <h1>Modifier un jeu </h1>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-lg-10 col-md-9">
<!--                        <div class="col-lg-1"><img src="img/ajout_contact.png" alt=""></div>-->
                    
                </div>
                
            
        
        
        <div class="container">
            <div class="row">
                    
                    <div class="tableaudebord">
                        <div class="contact_container">
                            <div class="row">
                               
                            </div> 
                        </div>

                        <div class='container'>
                            <div class='row'>


                                
                                    <form class="form-horizontal" role="form">
                                        
                                       
                                        <div class='row'>
                                            
                                                <div class="col-lg-6">
                                                    <!--<form class="form-horizontal" role="form">-->
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> Quantité :</label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" >
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> Le jeu est-il arrivé?</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control">
                                                                <option>OUI</option>
                                                                <option>NON</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Faut-il le renvoyer?</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control">
                                                                <option>OUI</option>
                                                                <option>NON</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> Prix de renvoi :</label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control"  >
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Est-il surdimensionné?</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control">
                                                                <option>OUI</option>
                                                                <option>NON</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Est-il un prototype?</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control">
                                                                <option>OUI</option>
                                                                <option>NON</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                 

                                     
                                        <div class="row">
                                            <div >
                                                <div class="boutton">
                                       
                                                    <div class="col-lg-3 col-lg-offset-1 ">
                                                        <button name="submit" id="submit" type="submit" value="submit" class="btn btn-default"><span class="glyphicon glyphicon-floppy-disk"></span>Modifier le jeu <span class="glyphicon glyphicon-chevron-right"></span></button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
						 </div>
						  </div>
						   </div>
        
        </div>

        <!-- /page content -->

        <!-- footer content -->
        
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
