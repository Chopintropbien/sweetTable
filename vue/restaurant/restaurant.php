
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/restaurant/partieDroite.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/restaurant/partieGauche.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/revue/publication_revue.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/publication/publication.class.css"/>

    <title> SweetTable </title>

    <!-- Elément Google Maps indiquant que la carte doit être affiché en plein écran et
qu'elle ne peut pas être redimensionnée par l'utilisateur -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <!-- Inclusion de l'API Google MAPS -->
    <!-- Le paramètre "sensor" indique si cette application utilise détecteur pour déterminer la position de l'utilisateur -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

</head>

<body onload="onLoad();">

<section id="header">
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<section id="body">

    <section id="partieGauche">

        <div>

            <h1> <?php echo $restaurantJSON->nom;  ?></h1>
            <div>
                <div> <!-- note -->
                    <?php
                    include_once('vue/fonction_annexe/etoile/note_etoile.php');
                    note_etoile($restaurantJSON->note, 45);
                    ?>
                </div>
                <p> <?php echo $restaurantJSON->nbAvis ?> avis </p> <!-- nb d'avis sur ce restaurant -->
            </div>

            <section> <!-- prix et cathegorie -->
                <!-- prix -->
                <?php
                $prix = '';
                for($j=0; $j<$restaurantJSON->prix; ++$j){ $prix = $prix . '$';}
                echo '<div>'.$prix.'</div>';

                // categorie
                $nbCathegorie = count($restaurantJSON->listeCathegorie);
                $cathegorie = '';
                for($j=0; $j<$nbCathegorie; ++$j){
                    $cathegorie = $cathegorie . $restaurantJSON->listeCathegorie[$j];
                    if(!($j == $nbCathegorie-1)){ $cathegorie = $cathegorie . ', '; }
                }
                echo '<p>'.$cathegorie.'</p>';

                echo '</aside>';

                ?>

            </section>

        </div>

        <!-- liste des 3 photos -->

        <section>
            <img src=" <?php echo $restaurantJSON->listePhotos[0] ?> "/>
            <img src=" <?php echo $restaurantJSON->listePhotos[1] ?> "/>
            <img src=" <?php echo $restaurantJSON->listePhotos[2] ?> "/>
            <!-- <p><a href="<?php echo $restaurantJSON->lienPhoto?>"> Voir toutes les photos </a></p> -->
            <p><a href="http://localhost/meittopi/restaurant/photo.php"> Voir toutes les photos </a></p>
        </section>


        <?php

        include_once('vue/class/liste/liste.class.php');
        include_once('vue/class/publication/publication.class.php');
        include_once('vue/class/revue/publication_revue.class.php');

        $liste = new Liste();
        foreach($liste_revuesJSON as $revue_JSON){
            $liste->ajoute(new Publication_Revue($revue_JSON));
        }
        $liste->affiche('revue','publication');

        ?>




    </section>

    <section id="partieDroite">


        <!-- button -->
        <div>
            <a href = "http://localhost/meittopi/restaurant/ecrire-une-revue.php" class="important_button"> Ecrire une revue</a>
            <button>
                Ajouter des photos
            </button>
        </div>

        <section>
            <article>
                <address><?php echo $restaurantJSON->quartier?></address>
                <address><?php echo $restaurantJSON->rue?></address>
                <address><?php echo $restaurantJSON->ville?></address>
                <p><?php echo $restaurantJSON->tel?></p>

                <h4>Horraire d'ouverture</h4>
                <p><?php echo $restaurantJSON->ouverture ?></p>

            </article>

            <div id="carte" style="width: 100%; height: 250px;"> </div>
        </section>

    </section>



</section>




</body>


<!-- dessine note -->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineEtoile.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoile.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessine_note.js"></script>

<script>
    dessine_note();
</script>

<!-- carte -->
<script src="http://localhost/meittopi/controleur/restaurant/restaurant/initializeCarte.js"> </script>
<script>
    google.maps.event.addDomListener(window, 'load', initialize("<?php echo $restaurantJSON->latitude ?>","<?php echo $restaurantJSON->longitude ?>"));
</script>

</html>