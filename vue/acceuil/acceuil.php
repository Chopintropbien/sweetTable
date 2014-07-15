<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/acceuil/acceuil.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/restaurant/restaurantRecherche.class.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/revue/nouvelleRevueDeQuelquUn.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/evenement/evenement.class.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/profil/profilNotification.class.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/notification/notification.class.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/listeAcTitre.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/restaurant/restaurantRecherche.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/photo/publication_photo.class.css"/>

    <title>
        Acceuil
    </title>
</head>

<body>

    <section class="global">
    <nav id="nav">
        <?php include("vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

    <h1 id="mettopi"> Meittopi a Lausanne</h1>
    <hr>
    <section id="partieGauche">
    <h2>Activités récentes</h2>


    <?php

    include_once('vue/class/liste/liste.class.php');
    include_once('vue/class/revue/nouvelleRevueDeQuelquUn.class.php');
    include_once('vue/class/evenement/evenement.class.php');
    include_once('vue/class/photo/publication_photo.class.php');

    $liste = new Liste();
    //TODO: quand andrei aura fini l'api, refaire les conditions
    foreach($listeAcceuil as $element){
        if(count($element) == 13){
            $liste->ajoute(new NouvelleRevueDeQuelquUn($element));
        }
        elseif(count($element) == 12) {
            $liste->ajoute(new Evenement($element));
        }
        else{
            $liste->ajoute(new Publication_photo($element));
        }
    }
    $liste->affiche('listeEvenement','evenement');
    ?>


</section>
<section id="partieDroite">

    <!-- profil de notication -->
        <?php
        include_once('vue/class/profil/profilNotification.class.php');
        foreach($profilJSON as $profilJSON2){
            $profil = new ProfilNotification($profilJSON2);
        }
        $profil->affiche();
        ?>

    <!-- notification  -->
        <?php
        include_once('vue/class/liste/listeAcTitre.class.php');
        include_once('vue/class/notification/notification.class.php');

        $liste = new ListeAcTitre('Notifications');
        foreach($listeNotificationJSON as $notificationJSON){
            $liste->ajoute(new Notification($notificationJSON));
        }
        $liste->affiche('notification', '');
        ?>

    <!-- restaurant recommendé -->
        <?php
        include_once('vue/class/restaurant/restaurantDeBase.class.php');
        include_once('vue/class/liste/listeAcTitre.class.php');
        $liste = new ListeAcTitre('Recomendés pour vous');
        foreach($listeRestauConseilJSON as $restauConseilJSON){
            $liste->ajoute(new RestaurantDeBase($restauConseilJSON));
        }
        $liste->affiche('restauRecommende', 'restaurant');

        ?>

</section>
</section>

</section>

<script src="http://localhost/meittopi/controleur/fonctionJS/etoile/dessineEtoile.js"> </script>
<script src="http://localhost/meittopi/controleur/fonctionJS/etoile/dessineDemiEtoile.js"> </script>
<script src="http://localhost/meittopi/controleur/class/noteEtoile/noteEtoile.js"></script>

<script>
    noteEtoile();
</script>


    <!-- evenement revus -->
    <script src="http://localhost/meittopi/controleur/addEvent.js"></script>
    <script src="http://localhost/meittopi/controleur/fonctionJS/rentreeUtilisateur/modifierCommentaire.js"></script>
    <script src="http://localhost/meittopi/controleur/class/revue/nouvelleRevueDeQuelquUn.js"></script>

    <script>
        evenementButtonEtCompliment();
    </script>

    <!-- evenement restaurant -->
    <script src="http://localhost/meittopi/controleur/fonctionJS/rentreeUtilisateur/faireApparaitreDisparaitreEnCliquant.js"> </script>
    <script src="http://localhost/meittopi/controleur/class/restaurant/restaurantDeBase.js"></script>

    <script>
        afficheEvenement();
    </script>


</body>
</html>

