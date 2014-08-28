
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/search/search.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/restaurant/restaurant.class.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/restaurant_not_find/restaurant_not_find.css"/>

    <title> SweetTable </title>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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

    <!-- si le restaurant cherché n'est pas trouvé -->
    <?php include('vue/restaurant_not_find/restaurant_not_find.php');?>


    <!-- carte de recherche -->
    <div id="contientCarte">
        <h2 id="titreRecherche"> Chez J'aime </h2>
        <div id="carte" style="width: 100%; height: 250px;">  </div>
        <aside id="infoBulle"></aside>
    </div>

    <?php
    include_once('vue/class/liste/liste.class.php');
    include_once('vue/class/restaurant/restaurant_complet.class.php');
    $liste = new Liste();

    foreach($liste_restaurant_rechercheJSON as $restaurant_rechercheJSON){
        $liste->ajoute(new Restaurant_complet($restaurant_rechercheJSON));
    }
    $liste->affiche('recherche_restau', 'restaurant');
    ?>

    <!-- options -->
    <ul id="options">
        <?php include("vue/search/option/option.php"); ?>
    </ul>

</section>


<!-- carte -->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/note_etoile.js"></script>
<script src="<?php echo $GLOBALS['host'];?>/controller/search/initialise_carte.js"> </script>

<script>
    google.maps.event.addDomListener(window, 'load', initialize('carte'));
</script>


<!-- etoile-->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineEtoile.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoile.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessine_note.js"></script>

<script>
    dessine_note();
</script>


<!-- restaurant-->

</body>

</html>