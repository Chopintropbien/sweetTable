<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/home/home.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/profil/profil.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/restaurant/restaurant.class.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/photo/publication_photo.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/revue/publication_revue.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/publication/publication.class.css"/>

    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<section id="body">


    <h1 id="mettopi"> Meittopi a <?php
        //$location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
        if (isset($_SESSION['ville'])) echo $_SESSION['ville'];
        else {
            ?>
                <a title="Pour que sweetTable puisse vous recommender des restaurants dans votre région" href="profil.php">
                    Ajouter votre lieu d'habitation
                </a>
            <?php
        }
        ?></h1>

    <hr/>

    <section id="partieGauche">
        <h2>Activités récentes</h2>

        <?php
        include_once('vue/class/liste/liste.class.php');
        include_once('vue/class/publication/publication.class.php');
        include_once('vue/class/photo/publication_photo.class.php');
        include_once('vue/class/revue/publication_revue.class.php');

        $liste = new Liste();
        //TODO: quand andrei aura fini l'api, refaire les conditions
        foreach($liste_publication_JSON as $element_JSON){
            $liste->ajoute(new Publication_Revue($element_JSON));

        }
        $liste->affiche('publication','publication');
        ?>


    </section>

    <section id="partieDroite">

        <?php


        // afficher profil
        include_once('vue/class/profil/profil.class.php');

        include('model/get_profil.php');
        $profil_JSON = get_profil($_SESSION['uid'], true);
        var_dump( $profil_JSON);

        include_once('vue/class/profil/profil.class.php');
        $profil = new Profil($profil_JSON);
        $profil->affiche('profil');


        //si il n'y a pas assez de revue pour la recommendation

        $nb_revue = count($profil_JSON['review_list']);
        if($nb_revue < 10){
            include('vue/home/pas_assez_recommendation.php');
        }

        // afficher recommendation
        else{
            include ('model/search/restau_recherche.php');
            $liste_restaurant_rechercheJSON = get_liste_restaurant_recherche();

            include_once('vue/class/liste/liste_ac_titre.class.php');
            include_once('vue/class/restaurant/restaurant_basic.class.php');
            $liste = new Liste_ac_titre('Recomendés pour vous');

            foreach($liste_restaurant_rechercheJSON as $restaurant_rechercheJSON){
                $liste->ajoute(new Restaurant_basic($restaurant_rechercheJSON));
            }
            $liste->affiche('restau_recommendation', 'restaurant');
        }


        ?>

    </section>



</section>


<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineEtoile.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoile.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessine_note.js"></script>

<script>
    dessine_note();
</script>


<script>

    var canvas = document.getElementsByClassName('nb_revue_pour_recommendation');
    var nb_revue = <?php echo $nb_revue;?>;

    for(var i = 0; i < nb_revue; ++i){
        dessine_cercle(canvas[i], canvas[i].height);
        dessine_check(canvas[i], canvas[i].height);
    }
    for(var i = nb_revue; i < canvas.length; ++i){
        dessine_cercle(canvas[i], canvas[i].height);
    }

    function dessine_cercle(canvas, taille){
        var ctx = canvas.getContext("2d");
        ctx.lineWidth = 1;

        var decalage_droite = 1;

        ctx.beginPath();
        ctx.arc(taille * 0.286 + decalage_droite, taille * 0.571, taille * 0.286, 0, 2*Math.PI);
        ctx.stroke();
    }
    function dessine_check(canvas, taille){
        var ctx = canvas.getContext('2d');

        ctx.strokeStyle = "black";
        ctx.fillStyle = "green";
        ctx.lineWidth = 2;

        var decalage_droite = 1;

        ctx.beginPath();
        ctx.moveTo(0 + decalage_droite, taille * 0.429);
        ctx.lineTo(taille * 0.143 + decalage_droite, taille * 0.286);
        ctx.lineTo(taille * 0.286 + decalage_droite, taille * 0.571);
        ctx.lineTo(taille * 0.571 + decalage_droite, decalage_droite);
        ctx.lineTo(taille * 0.714 + decalage_droite, taille * 0.143);
        ctx.lineTo(taille * 0.286 + decalage_droite, taille - decalage_droite);
        ctx.closePath();
        ctx.stroke();
        ctx.fill();


    }

</script>



</body>
</html>