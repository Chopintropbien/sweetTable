<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/ajouter_restaurant/ajouter_restaurant.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/ajouter_restaurant/champ_restau.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/ajouter_restaurant/horraire.css"/>

    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php
    include("vue/navigator/navigator.php");
    affiche_nav();
    ?>
</section>

<section id="body">

    <?php

    include('vue/ajouter_restaurant/francais.php');

    // message de confirmation pour l'envoie de mail
    if(isset($envoie_mail_succed)){
        if($envoie_mail_succed) echo '<p class="confirmation">'.$message_confirmation_mail.'</p>';
        else echo '<p class="error">'.$message_error_mail.'</p>';
    }


    ?>

    <h2>Ajouter un restaurant</h2>

    <form action="ajouter-restaurant.php" method="post" enctype="multipart/form-data" id="form_nouveau_restau">

       <!-- form pour le restau -->
       <?php include('vue/ajouter_restaurant/champ_restau.php');?>


        <section id="photos">

            <div>
                <img src="http://localhost/Meittopi/image/profil_vide.png" id="1img_tag"/>
                <input type="file" name="1photo" id="1photo_input"/>
                <p id="ajoute_2eme_photo">Ajouter une autre photo</p>
            </div>

            <div style="display: none;" id="2_div_photo">
                <img src="http://localhost/Meittopi/image/profil_vide.png"  id="2img_tag"/>
                <input type="file" name="2photo" id="2photo_input"/>
                <p id="ajoute_3eme_photo">Ajouter une autre photo</p>
            </div>

            <div style="display: none;" id="3_div_photo" >
                <img src="http://localhost/Meittopi/image/profil_vide.png" id="3img_tag"/>
                <input type="file" name="3photo" id="3photo_input"/>
            </div>

        </section>


        <div class="div_annuler_publier">
            <input type="submit" value="Valider"/>
        </div>

    </form>


</section>


</body>

<script src="<?php echo $GLOBALS['host'];?>/controller/ajouter_restaurant/affiche_tableau_horraire.js"></script>
<script src="<?php echo $GLOBALS['host'];?>/controller/ajouter_restaurant/action_tableau_horraire.js"></script>

<!-- gestion des phtot -->
<script src="<?php echo $GLOBALS['host'];?>/vue/ajouter_restaurant/gestion_photo.js"></script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/affiche_img_select.js"></script>
<script>
    affiche_img_select('1photo_input', '1img_tag');
    affiche_img_select('2photo_input', '2img_tag');
    affiche_img_select('3photo_input', '3img_tag');
</script>

</html>