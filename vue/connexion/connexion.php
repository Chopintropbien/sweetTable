
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/connexion/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/slide_presentation_sweetTable/slide_presentation_sweetTable.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/connexion/connexion.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/connexion/formulaireInscription.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/slide_presentation/js-image-slider.css" type="text/css" />

    <title> SweetTable </title>
</head>

<body>

<!-- facebook -->
<!--
<div id="fb-root"></div>
<script src="<?php //echo $GLOBALS['host'];?>/controller/connexion/facebook/api.js"> </script> -->

<section id="header">
    <?php include("vue/connexion/navigator.php"); ?>

</section>

<section id="body">

    <?php
    include('vue/connexion/francais/connexion.php');

    if($error_connexion_db_verification){
        echo '<p class="error">' . $error_connexion_db_message .'</p>';
    }
    if($donne_pas_remplie_bien){
        echo '<p class="error">' . $pas_bien_remplie .'</p>';
    }
    if($error_connexion_db){
        echo '<p class="error">' . $error_connexion_db_big_probleme .'</p>';
    }

    ?>
    <p>

    </p>

    <section id="gauche">
       <?php include('vue/slide_presentation/slide_presentation.php');?>
    </section>

    <section id="droite">
        <!-- facebook
        <h1> Connexion via :</h1>
        <div class="fb-login-button" id="facebook" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"> </div>-->
        <?php include("vue/connexion/formulaireInscription.php"); ?>
    </section>


</section>




</body>


<script src="<?php echo $GLOBALS['host'];?>/controller/connexion/facebook/initialise.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/slide_presentation_sweetTable/slide.js"> </script>

</html>



























