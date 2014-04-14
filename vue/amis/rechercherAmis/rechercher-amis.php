<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/profil/navigateur/navigateur.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/amis/rechercherAmis/rechercher-amis.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/listeAcTitre.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/amis/personneQuOnRecherche.class.css"/>


    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <?php include("../vue/amis/navigateur/navigateur.php"); ?>

        <section id="section">


            <!-- section de gauche -->
            <section id="sectionGauche">

                <input type="text" placeholder="Trouver une personne" id="inputRecherchePersonne"/>
                <input type="button" value="Rechercher" id="inputLanceRecherche"/>

                <?php

                include_once('../vue/class/amis/personneQuOnRecherche.class.php');
                include_once('../vue/class/liste/liste.class.php');

                $listePersonneRecherche = new Liste();
                foreach($listePersonneRechercheJSON as $personneRechercheJSON){
                    $listePersonneRecherche->ajoute(new PersonneQuOnRecherche($personneRechercheJSON));
                }
                $listePersonneRecherche->affiche('personneRecherche', 'personne');

                ?>

            </section>


            <!-- section de droite -->
            <section id="sectionDroite">

                <!-- afficher les notifications -->

                <?php
                //TODO: afficher les nofication
                /*
                include_once('../vue/class/liste/listeAcTitre.class.php');
                include_once('../vue/class/notification/notification.class.php');

                $liste = new ListeAcTitre('Notifications');
                foreach($listeNotificationJSON as $notificationJSON){
                    $liste->ajoute(new Notification($notificationJSON));
                }
                $liste->affiche('notification', ''); */
                ?>


                <?php

                include_once('../vue/class/liste/listeAcTitre.class.php');

                $listePersonneSuggestion = new ListeAcTitre('Suggestion');
                foreach($listePersonneSuggestionJSON as $personneSuggestionJSON){
                    $listePersonneSuggestion->ajoute(new PersonneQuOnRecherche($personneSuggestionJSON));
                }
                $listePersonneSuggestion->affiche('personneSuggestion', 'personne');

                ?>

            </section>

        </section>


    </section>


</body>
</html>