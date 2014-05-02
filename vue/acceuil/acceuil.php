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

    <h2 id="mettopi"> Meittopi a Lausanne</h2>
    <hr>
    <section id="partieGauche">
    <h2>Activités récentes</h2>


    <?php

    include_once('vue/class/liste/liste.class.php');
    include_once('vue/class/revue/nouvelleRevueDeQuelquUn.class.php');
    include_once('vue/class/evenement/evenement.class.php');

    $liste = new Liste();
    //TODO: quand andrei aura fini l'api, refaire les conditions
    foreach($listeAcceuil as $element){
        if(count($element) == 13){
            $liste->ajoute(new NouvelleRevueDeQuelquUn($element));
        }
        else{
            $liste->ajoute(new Evenement($element));
        }

    }
    $liste->affiche('listeEvenement','evenement');
    ?>


</section>
<section id="partieDroite"></section>
</section>

</section>
</body>
</html>

