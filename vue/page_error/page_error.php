
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/page_error/page_error.css"/>
    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php
    if(isset($_SESSION['uid']))
        include("vue/navigator/navigator.php");
    else include("vue/connexion/navigator.php");
    ?>
</section>

<section id="body">

    <h2>Erreur 404 !</h2>
    <h1>Oups !</h1>
    <p>Malheureusement cette page n'existe <mark>pas</mark> ou <mark>plus</mark>!</p>


</section>




</body>

</html>

