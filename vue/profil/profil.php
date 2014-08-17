<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/profil/profil.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/profil/profil.class.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/restaurant/restaurant.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/revue/revue_d_une_personne.class.css"/>

    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<section id="body">

    <?php
    include_once('vue/class/profil/profil.class.php');
    $profil = new Profil();
    $profil->affiche('profil');
    ?>

    <?php
    include_once('vue/class/liste/liste_ac_titre.class.php');
    include_once('vue/class/restaurant/restaurant_basic.class.php');
    include_once('vue/class/revue/revue_d_une_personne.class.php');

    $liste = new Liste_ac_titre('Vos revues');
    for($i = 0; $i<3; ++$i){
        $liste->ajoute(new Revue_d_une_personne());
    }
    // ture ou false ce qui change entre une personne qui visite son propre profil(true) ou celui d'une autre personne(false)
    $liste->affiche('revue','revue_d_une_personne', true);
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