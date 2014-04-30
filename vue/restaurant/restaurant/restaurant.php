
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/restaurant/restaurant/sectionDeGauche.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/restaurant/restaurant/sectionDeDroite.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/revue/nouvelleRevueDeQuelquUn.class.css"/>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!-- Elément Google Maps indiquant que la carte doit être affiché en plein écran et
    qu'elle ne peut pas être redimensionnée par l'utilisateur -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <!-- Inclusion de l'API Google MAPS -->
    <!-- Le paramètre "sensor" indique si cette application utilise détecteur pour déterminer la position de l'utilisateur -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>


    <title>
        Acceuil
    </title>

</head>

<body onload="onLoad();">

<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <section id="gauche">

            <div>

            <h1> <?php echo $restaurantJSON->nom;  ?></h1>
            <div>
                <div> <!-- note -->
                    <?php
                    for($j=0; $j<$restaurantJSON->note; ++$j){
                    echo '<canvas width="23" height="23"></canvas>';
                    }
                    ?>
                </div>
                <p> <?php echo $restaurantJSON->nbAvis ?> </p> <!-- nb d'avis sur ce restaurant -->
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

                echo ' <span id="croixApparitionElement">+</span>';
                ?>

            </section>

            </div>

            <!-- liste des 3 photos -->

            <section>
                <img src=" <?php echo $restaurantJSON->listePhotos[0] ?> "/>
                <img src=" <?php echo $restaurantJSON->listePhotos[1] ?> "/>
                <img src=" <?php echo $restaurantJSON->listePhotos[2] ?> "/>
                <p><a href="<?php echo $restaurantJSON->lienPhoto?>"> Voir toutes les photos </a></p>
            </section>


            <?php

            include_once('../vue/class/liste/liste.class.php');
            include_once('../vue/class/revue/nouvelleRevueDeQuelquUn.class.php');

            $liste = new Liste();
            foreach($listeRevuesJSON as $revueJSON){
                 $liste->ajoute(new NouvelleRevueDeQuelquUn($revueJSON));

            }
            $liste->affiche('listeEvenement','');
            ?>




        </section>

        <section id="droite">


            <!-- button -->
            <div>
                <input type="button" value="Ecrire une revue" id="ecrireUneRevus"/>
                <input type="button" value="Ajouter des photos" id="ajouterPhotos"/>

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

</section>

<script src="http://localhost/meittopi/controleur/restaurant/restaurant/initializeCarte.js"> </script>

<script>

    google.maps.event.addDomListener(window, 'load', initialize("<?php echo $restaurantJSON->latitude ?>","<?php echo $restaurantJSON->longitude ?>"));

</script>


</body>
</html>

