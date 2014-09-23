<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/inviter-amis/inviter-amis.css"/>

    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php
    include("vue/navigator/navigator.php");
    affiche_nav();
    ?>
</section>

<section id="body">


    <?php

    // message de confirmation pour l'envoie de mail
    include("vue/inviter-amis/francais.php");
    if($tentative_envoie_de_mail){
        // tous les mail on ete envoie
        if($tout_mail_envoie) echo '<p class="confirmation">'.$message_confirmation_mail.'</p>';
        // seulement certaine
        else if($error_que_certain_mail)  echo '<p class="error">'.$message_error_certain_mail.'</p>';
        else echo '<p class="error">'.$message_error_tous_mail.'</p>';
    }

    ?>


    <form action="" method="post">
        <h2> <?php echo $titre; ?> </h2>
        <section id="contenantEmail">
            <input type="text" placeholder="<?php echo $adresseMailN; ?> 1" id="1adressEmail" name="1adressEmail"/>
            <input type="text" placeholder="<?php echo $adresseMailN; ?> 2" id="2adressEmail" name="2adressEmail"/>
            <input type="text" placeholder="<?php echo $adresseMailN; ?> 3" id="3adressEmail" name="3adressEmail"/>
        </section>

        <p id="ajouterEmail"> <?php echo $ajouterEmail; ?> </p>

        <h4><?php echo $message; ?></h4>

        <textarea name="mail"> <?php echo $messageAEnvoyer; ?></textarea>
        <input type="submit" value="<?php echo $envoyer; ?>" id="envoieMail" class="important_button"/>
    </form>

</section>

</body>

<script src="<?php echo $GLOBALS['host'];?>/controller/js_function/add_event.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/controller/inviter-amis/ajouter-adresse-mail.js"> </script>

<script>
    ajouterAdresseEmail();
</script>

</html>