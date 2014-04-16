<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/connexion/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/identificationEchouee/identificationEchouee.css"/>
    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <img src="http://localhost/Meittopi/image/logoSweetTable.png" alt="SweetTable" id="logo"/>
    </nav>

    <?php
    include('vue/identificationEchouee/francais.php');
    ?>

    <section id="pageConnection">
        <article>
            <h3 id="connextionTitre"> <?php echo $connexionASweetTable ?></h3>
            <p id="emailPAsBon"> <?php echo $motDePasseEmailInvalise ?> </p>
            <form action="../../modele/connexion.php" method="post">
                <ul>
                    <li >
                        <input type="email" name="emailInscrit" id="emailC" class="champ" placeholder="<?php echo $votreAdressEmail ?>"/>
                    </li>
                    <li >
                        <input type="password" name="motdepasseInscrit"  id="motdepasseC" class="champ" placeholder="<?php echo $votreMotDePasse ?>"/>
                    </li>
                    <li>
                        <input type="checkbox" name="sectionActive" id="sectionActive" >
                        <label for="sectionActive" id="gardersection"><?php echo $garderVotreSectionActive ?> </label>
                    </li>
                    <li id="connexionOuInscription">
                        <input type="submit" value="<?php echo $connexion ?>" id="connexion"/>
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
