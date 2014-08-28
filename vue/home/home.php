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

        <?php/*
        include_once('vue/class/liste/liste.class.php');
        include_once('vue/class/publication/publication.class.php');
        include_once('vue/class/photo/publication_photo.class.php');
        include_once('vue/class/revue/publication_revue.class.php');

        $liste = new Liste();
        foreach($profil_JSON->review_list as $revue_JSON){
            $liste->ajoute(new Publication_Revue($revue_JSON));
        }
        $liste->affiche('publication','publication');*/
        ?>


    </section>

    <section id="partieDroite">

        <?php
        // afficher profil
        include_once('vue/class/profil/profil.class.php');



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
                //$liste->ajoute(new Restaurant_basic($restaurant_rechercheJSON));
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


<?php
if($nb_revue < 10){
    ?>
    <!-- dessine check -->
    <script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/dessine_check.js"></script>
    <script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/dessine_cercle.js"></script>
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


    </script>

    <?php
}
?>



</body>
</html>