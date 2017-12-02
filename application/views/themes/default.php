<!DOCTYPE html>
<?php ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
    <head>
        <meta charset=<?php echo $charset; ?>>
        <title><?php echo $titre; ?></title>
        <link href=<?php echo base_url('/assets/css/bootstrap.min.css'); ?> rel="stylesheet">
        <link href=<?php echo base_url('/assets/css/perso.css'); ?> rel="stylesheet">
    </head>



    <body background=<?php //echo base_url('/assets/images/fond.jpg'); ?> >

        <header>
            <br>
            <div class="row">
               
                                
                <div class="col-md-1 col-md-offset-7">
                        
                    <button type="button" onclick='location.href="<?php echo site_url('');?>"' class="btn btn-default">Accueil</button>
                    
                </div>
               <!--
                <div class="col-md-1">
                    <div class="col-md-8 col-md-offset-4">
                         <button type="button" onclick='location.href="<?php echo site_url('user/logout');?>"' 
                        class="btn btn-danger">Deconnexion</button>
                    </div>
                </div>
               -->
                
                <div class="col-md-2">

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h1><?php echo $titre; ?></h1>
                </div>
            </div>
        </header>
        <div id="contenu">
            <?php echo $output; ?>
        </div>

        <footer class="row">

        </footer>
    </body>
</html>