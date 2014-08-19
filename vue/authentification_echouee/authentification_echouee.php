


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/authentification_echouee/navigator.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/authentification_echouee/authentification_echouee.css"/>

    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php include("vue/authentification_echouee/navigator.php"); ?>
</section>

<section id="body">

    <?php
    include('vue/authentification_echouee/francais.php');
    ?>

    <article>
        <h3 id="connextionTitre"> <?php echo $connexionASweetTable ?></h3>
        <p id="emailPAsBon" class="error">
            <?php
            if(isset($email_deja_utilise)) echo $email_utilise;
            else echo $motDePasseEmailInvalise ?>
        </p>
        <form action="home.php" method="post">
            <ul>
                <li >
                    <input type="email" name="emailInscrit" id="emailC" class="champ" placeholder="<?php echo $votreAdressEmail ?>" value="<?php if(isset($email_deja_utilise)) echo $email_deja_utilise;?>"/>
                </li>
                <li >
                    <input type="password" name="motdepasseInscrit"  id="motdepasseC" class="champ" placeholder="<?php echo $votreMotDePasse ?>"/>
                </li>
                <li>
                    <input type="checkbox" name="sectionActive" id="sectionActive" >
                    <label for="sectionActive" id="gardersection"><?php echo $garderVotreSectionActive ?> </label>
                </li>
                <li>
                    <button id="connexionOuInscription">
                        <?php echo $connexion ?>
                    </button>
                </li>
                <li id="oublie">
                    <a id="motDePasseOublie"><?php echo $motDePasseOublier ?></a>
                </li>

            </ul>
        </form>

    </article>

</section>




</body>

</html>




