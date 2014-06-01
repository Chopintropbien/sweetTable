<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/profil/navigateur/navigateur.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/amis/inviterAmis/inviter-amis.css"/>


    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <?php include("../vue/amis/navigateur/navigateur.php"); ?>

        <section id="section">

            <?php include("../vue/amis/inviterAmis/francais.php"); ?>

            <form action="envoyerMail.php" method="post">
                <h1> <?php echo $titre; ?> </h1>
                <section id="contenantEmail">
                    <input type="text" placeholder="<?php echo $adresseMailN; ?> 1" id="1adressEmail" name="1adressEmail"/>
                    <input type="text" placeholder="<?php echo $adresseMailN; ?> 2" id="2adressEmail" name="2adressEmail"/>
                    <input type="text" placeholder="<?php echo $adresseMailN; ?> 3" id="3adressEmail" name="3adressEmail"/>
                </section>

                <p id="ajouterEmail"> <?php echo $ajouterEmail; ?> </p>

                <h4><?php echo $message; ?></h4>

                <textarea name="mail"> <?php echo $messageAEnvoyer; ?></textarea>
                <input type="submit" value="<?php echo $envoyer; ?>" id="envoieMail"/>
            </form>

        </section>


    </section>

    <script src="http://localhost/meittopi/controleur/fonctionJS/addEvent.js"> </script>
    <script src="http://localhost/meittopi/controleur/amis/inviterAmis/inviter-amis.js"> </script>

    <script>
        ajouterAdresseEmail();
    </script>




</body>
</html>