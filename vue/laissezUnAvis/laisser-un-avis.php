<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/laissezUnAvis/laisser-un-avis.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/listeAcTitre.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/revue/revue.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/revue/revueAValider.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/restaurant/restaurantRecherche.class.css"/>

    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">
		<h1> Sur quel restaurant voulez-vous écrire une revue?</h1>

        <section>
            <div>
                <label for="nomRestaurant"> Le nom du restaurant:</label>
                <input type="text" id="nomRestaurant" name="nomRestaurant"/>
            </div>
            <div>
                <label for="adresseRestaurant">Ville, quartier, adresse...</label>
                <input type="text" id="adresseRestaurant" name="adresseRestaurant"/>
            </div>
                <input type="button" value="Rechercher"/>
        </section>

        <!-- affichage des revus a valider-->
        <?php
        include_once('vue/class/liste/listeAcTitre.class.php');
        include_once('vue/class/revue/revueAValider.class.php');
        include_once('vue/class/restaurant/restaurantRevue.class.php');

        include('vue/laissezUnAvis/francais.php');
        $liste = new ListeAcTitre($titre);
        foreach($listeRevueNonCommenteJSON as $revueJSON){
            $liste->ajoute(new RevueAValider(new RestaurantRevue($revueJSON[1])));
        }
        $liste->affiche("listeRevue", "revue");
        ?>


    </section>
</section>
</body>
