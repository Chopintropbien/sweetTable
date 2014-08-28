<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/write-a-review/write-a-review.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/restaurant/restaurant.class.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/restaurant_not_find/restaurant_not_find.css"/>





    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<section id="body">
    <h2> Sur quel restaurant voulez-vous écrire une revue?</h2>

    <table>
        <tr>
            <td><label for="nomRestaurant"> Le nom du restaurant:</label></td>
            <td><label for="adresseRestaurant">Ville, quartier, adresse...</label></td>
            <td></td>
        </tr>

        <tr>
            <td>
                <input type="text" id="nomRestaurant" name="nomRestaurant"/>
                <ul id="revue_restau_ajax" class="like_input" style="display: none;"></ul>
            </td>
            <td>
                <input type="text" id="adresseRestaurant" name="adresseRestaurant"/>
                <ul id="revue_lieu_ajax" class="like_input" style="display: none;"></ul>
            </td>
            <td>
                <input type="submit" value="Rechercher" class="important_button"/>
            </td>
        </tr>
    </table>

    <!-- si le restaurant cherché n'est pas trouvé -->
    <?php include('vue/restaurant_not_find/restaurant_not_find.php');?>


    <?php

    include ('model/search/restau_recherche.php');
    $liste_restaurant_rechercheJSON = get_liste_restaurant_recherche();

    include_once('vue/class/liste/liste.class.php');
    include_once('vue/class/restaurant/restaurant_complet.class.php');
    $liste = new Liste();

    foreach($liste_restaurant_rechercheJSON as $restaurant_rechercheJSON){
        $liste->ajoute(new Restaurant_complet($restaurant_rechercheJSON));
    }
    $liste->affiche('resultat_restau_revue', 'restaurant', true);
    ?>

</section>


</body>

<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineEtoile.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoile.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessine_note.js"></script>

<script>
    dessine_note();
</script>

</html>
