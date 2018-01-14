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
              <a class="site_title"><i class="fa fa-home"></i> <span> Festival du Jeu!</span></a>
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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Modifier Suivi</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small>Cochez les informations à modifier : </small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method='post' action="<?php echo site_url("suivi/edit") ?>">

							<!-- Zones de texte -->
                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Contacté </label>
                        <div class="col-md-11 col-sm-9 col-xs-12">
                          <input type="radio" name="contacte" value="1" id="oui" <?php if ($suivi[0]->contacte == 1) echo " checked= \"checked\" " ?> /> <label for="oui">Oui</label>
                          <input type="radio" name="contacte" value="0" id="non" <?php if ($suivi[0]->contacte == 0) echo " checked= \"checked\" " ?> /> <label for="non">Non</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">A repondu </label>
                        <div class="col-md-11 col-sm-9 col-xs-12">
                          <input type="radio" name="repondu" value="1" id="oui" <?php if ($suivi[0]->reponse == 1) echo " checked= \"checked\" " ?> /> <label for="oui">Oui</label>
                          <input type="radio" name="repondu" value="0" id="non" <?php if ($suivi[0]->reponse == 0) echo " checked= \"checked\" " ?> /> <label for="non">Non</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Present </label>
                        <div class="col-md-11 col-sm-9 col-xs-12">
                          <input type="radio" name="present" value="1" id="oui" <?php if ($suivi[0]->presentAuFestival == 1) echo " checked= \"checked\" " ?> /> <label for="oui">Oui</label>
                          <input type="radio" name="present" value="0" id="non" <?php if ($suivi[0]->presentAuFestival == 0) echo " checked= \"checked\" " ?> /> <label for="non">Non</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">A payé </label>
                        <div class="col-md-11 col-sm-9 col-xs-12">
                          <input type="radio" name="paye" value="1" id="oui" <?php if ($suivi[0]->paiement == 1) echo " checked= \"checked\" " ?> /> <label for="oui">Oui</label>
                          <input type="radio" name="paye" value="0" id="non" <?php if ($suivi[0]->paiement == 0) echo " checked= \"checked\" " ?>/> <label for="non">Non</label>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Annulé </label>
                        <div class="col-md-11 col-sm-9 col-xs-12">
                          <input type="radio" name="annule" value="1" id="oui" <?php if ($suivi[0]->annule == 1) echo " checked= \"checked\" " ?> /> <label for="oui">Oui</label>
                          <input type="radio" name="annule" value="0" id="non" <?php if ($suivi[0]->annule == 0) echo " checked= \"checked\" " ?> /> <label for="non">Non</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Facturé</label>
                        <div class="col-md-11 col-sm-9 col-xs-12">
                          <input type="radio" name="facture" value="1" id="oui" <?php if ($suivi[0]->facture == 1) echo " checked= \"checked\" " ?> /> <label for="oui">Oui</label>
                          <input type="radio" name="facture" value="0" id="non" <?php if ($suivi[0]->facture == 0) echo " checked= \"checked\" " ?> /> <label for="non">Non</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Dernière Date Contact</label>
                        <div class="col-md-11 col-sm-9 col-xs-12">
                          <input type="date" name="derniereContact" value = "<?php echo $suivi[0]->derniereDateContact ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Dernière Date de Reponse</label>
                        <div class="col-md-11 col-sm-9 col-xs-12">
                          <input type="date" name="derniereReponse" value = "<?php echo $suivi[0]->derniereDateReponse ?>">
                        </div>
                      </div>


                      <input name="numEditeur" type="hidden" value="<?php echo $suivi[0]->numEditeur ?>">

                     <!-- Boutons -->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Envoyer</button>
                        </div>
                      </div>

                    </form>
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
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
