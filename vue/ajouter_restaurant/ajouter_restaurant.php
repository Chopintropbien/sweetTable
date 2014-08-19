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
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<section id="body">


    <?php

    if(isset($_POST['nom_restau']) && isset($_POST['adresse_1']) ){

        // si c'est l'admin ajouter le restaurant a la base de donne
        if($_SESSION['uid'] == 'user21'){
            if(isset($_POST['nom_restau']) && isset($_POST['horraire_admin']) && isset($_POST['adresse_1']) &&
               isset($_POST['code_postal']) && isset($_POST['ville']) && isset($_POST['pays'])){

                $uid = $_POST['nom_restau'];
                $uid .= $_POST['adresse_1'];
                if(isset($_POST['adresse_2'])) $uid .= $_POST['adresse_2'];
                $uid .= $_POST['code_postal'];
                $uid .= $_POST['ville'];
                $uid .= $_POST['pays'];

                echo $uid;

                include('model/ajoute_restaurant_db.php');
                //var_dump(ajoute_restaurant_db($uid, $_POST['nom_restau'], $_POST['date_ouverture'],  $_POST['horraire_admin']));
            }

        }
        //envoyer un mail à l'admin
        else{

        }
    }



    ?>



    <h2>Ajouter un restaurant</h2>

    <form action="ajouter-restaurant.php" method="post" id="form_nouveau_restau">

       <!-- form pour le restau -->
       <?php include('vue/ajouter_restaurant/champ_restau.php');?>


        <section id="photos">
            <img src="http://localhost/Meittopi/image/profil_vide.png"/>
            <input type="file"/>
        </section>


        <div class="div_annuler_publier">
            <input type="submit" value="Valider"/>
        </div>

    </form>


</section>


</body>

<script src="<?php echo $GLOBALS['host'];?>/controller/ajouter_restaurant/affiche_tableau_horraire.js"></script>
<script src="<?php echo $GLOBALS['host'];?>/controller/ajouter_restaurant/action_tableau_horraire.js"></script>

</html>