<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/ajouter_restaurant/ajouter_restaurant.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/ajouter_restaurant/champ_restau.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/ajouter_restaurant/horraire.css"/>

    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<section id="body">



    <form action="post" id="form_nouveau_restau">

       <!-- form pour le restau -->
       <?php include('vue/ajouter_restaurant/champ_restau.php');?>

    </form>


</section>


</body>

<script src="<?php echo $GLOBALS['host'];?>/controller/ajouter_restaurant/affiche_tableau_horraire.js"></script>
<script src="<?php echo $GLOBALS['host'];?>/controller/ajouter_restaurant/action_tableau_horraire.js"></script>

</html>