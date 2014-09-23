
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
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/publication/publication_photo.class.css"/>

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
    <?php
    include("vue/navigator/navigator.php");
    affiche_nav();
    ?>
</section>

<section id="body">

    <section id="partieGauche">


        <div>

            <h1> <?php echo $restaurantJSON->name;  ?></h1>
            <div>
                <div> <!-- note -->
                    <?php
                    include_once('vue/fonction_annexe/etoile/note_etoile.php');
                    note_etoile(/*$restaurantJSON->note*/ 4.5, 45); // TODO
                    ?>
                </div>
                <p> <?php echo count($restaurantJSON->review_list) ?> avis </p> <!-- nb d'avis sur ce restaurant -->
            </div>

            <section> <!-- prix et cathegorie -->
                <!-- prix -->
                <?php
                $prix = '';
                for($j=0; $j<$restaurantJSON->price; ++$j){ $prix = $prix . '$';}
                echo '<div>'.$prix.'</div>';

                // categorie
                include_once('vue/search/option/francais/array_name.php');
                $nbCathegorie = count($restaurantJSON->cuisine);
                $cathegorie = '';
                for($j=0; $j<$nbCathegorie; ++$j){
                    $cathegorie = $cathegorie . $restaurantJSON->cuisine[$j];
                    if(!($j == $nbCathegorie-1)){ $cathegorie = $cuisines_name[$cathegorie] . ', '; }
                }
                echo '<p>'.$cathegorie.'</p>';

                echo '</aside>';

                ?>

            </section>

        </div>

        <!-- liste des 3 photos -->

        <section>
            <img src="data:image/png;base64,<?php echo $restaurantJSON->picture[0]->thumbnail ?>"/>
            <img src="data:image/png;base64,<?php echo $restaurantJSON->picture[1]->thumbnail ?> "/>
            <img src="data:image/png;base64,<?php echo $restaurantJSON->picture[2]->thumbnail ?> "/>
            <!-- <p><a href="<?php echo $restaurantJSON->lienPhoto?>"> Voir toutes les photos </a></p> -->
            <!--<p><a href="http://localhost/meittopi/restaurant/photo.php"> Voir toutes les photos </a></p> -->
        </section>


        <?php

        include_once('vue/class/liste/liste.class.php');
        include_once('vue/class/publication/publication.class.php');
        include_once('vue/class/revue/publication_revue.class.php');

        include_once('model/get_revue.php');

        $liste = new Liste();
        foreach($restaurantJSON->review_list as $revue_JSON){
            $revue = get_revue($revue_JSON->uid);
            $liste->ajoute(new Publication_Revue($revue->issuer[0]->name, $photo_profil, $revue->issuer[0]->uid, $revue->created,
                $revue->object->name, $revue->object->uid, $revue->title, $revue->user_match, $revue->contents,
                $revue->picture[0]->thumbnail, $revue->picture[0]->thumbnail, $revue->picture[0]->thumbnail));
        }
        $liste->affiche('revue','publication', true);

        ?>




    </section>

    <section id="partieDroite">


        <!-- button -->
        <div>
            <a href="<?php echo $GLOBALS['host'];?>/editer-une-revue.php?uid=<?php echo $_GET['uid'];?>" class="important_button"> Ecrire une revue</a>
            <!--<button>
                Ajouter des photos
            </button> -->
        </div>

        <section>
            <article>
                <!-- TODO: -->
                <address><?php //echo $restaurantJSON->quartier?></address>
                <address><?php //echo $restaurantJSON->rue?></address>
                <address><?php //echo $restaurantJSON->ville?></address>
                <p><?php echo $restaurantJSON->phone?></p>

            </article>

            <div id="carte" style="width: 100%; height: 250px;"> </div>
        </section>


        <table id="horraire">
            <caption> Horraire d'ouverture</caption>
            <tr>
                <td>Lundi</td>
                <td> 10-19h </td>
                <td></td>
            </tr>

            <tr>
                <td>Mardi</td>
                <td> 10-19h </td>
                <td></td>
            </tr>

            <tr>
                <td>Mercredi</td>
                <td> 10-19h </td>
                <td></td>
            </tr>

            <tr>
                <td>Jeudi</td>
                <td> 10-19h </td>
                <td class="open_now" style="color: green;">Ouvert maintenant</td>
            </tr>

            <tr>
                <td>Vendredi</td>
                <td> 10-19h </td>
                <td></td>
            </tr>

            <tr>
                <td>Samedi</td>
                <td> 10-19h </td>
                <td></td>
            </tr>

            <tr>
                <td>Dimanche</td>
                <td> 10-19h </td>
                <td></td>
            </tr>
        </table>


        <ul id="fonctionnalite">
            <li><h3> Fonctionnalitées </h3></li>

            <?php


            foreach($fonctionnalite_name as $keys_tags => $name_tag){
                echo '<li>';
                    echo '<p>'. $name_tag . '</p>';
                    if(in_array( $keys_tags , $restaurantJSON->tags)){
                        echo '<canvas class="fonctionnalite_presente" width="23" height="28" >';
                    }
                echo '</li>';
            }
            ?>
        </ul>



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


<!-- dessine check -->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/dessine_check.js"></script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/dessine_cercle.js"></script>
<script>

    var canvas = document.getElementsByClassName('fonctionnalite_presente');

    for(var i = 0; i < canvas.length; ++i){
        dessine_cercle(canvas[i], canvas[i].height);
        dessine_check(canvas[i], canvas[i].height);
    }


</script>

</html>