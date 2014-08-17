
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/connexion/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/connexion/connexion.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/connexion/formulaireInscription.css"/>
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

    <section id="gauche">

        <img src="http://localhost/Meittopi/image/profil_vide.png" id="0slide"/>
        <img src="" id="1slide" style="display:none;"/>
        <img src="http://localhost/Meittopi/image/profil_vide.png" id="2slide" style="display:none;"/>
        <img src="" id="3slide" style="display:none;"/>
        <img src="http://localhost/Meittopi/image/profil_vide.png" id="4slide" style="display:none;"/>
        <img src="" id="5slide" style="display:none;"/>

        <div id="div_button_slide" class="0">
            <canvas id="0slide_button" class="slide_button"></canvas>
            <canvas id="1slide_button" class="slide_button"></canvas>
            <canvas id="2slide_button" class="slide_button"></canvas>
            <canvas id="3slide_button" class="slide_button"></canvas>
            <canvas id="4slide_button" class="slide_button"></canvas>
            <canvas id="5slide_button" class="slide_button"></canvas>
        </div>


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
<script src="<?php echo $GLOBALS['host'];?>/controller/connexion/slide.js"> </script>

</html>



























