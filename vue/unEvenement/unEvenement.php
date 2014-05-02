<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/unEvenement/unEvenement.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/listeACommenter.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/evenement/evenement.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/discution/discutionEntreAmis.class.css"/>




    <title>
        Acceuil
    </title>
</head>

<body>

<section class="global">
    <nav id="nav">
        <?php include("vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <!-- affiche le titre de l'evnement -->
        <h1>
            <?php
            //TODO: quand andrei aura fini l'api, refaire les conditions
            foreach($evenementJSON as $element){
                echo $element[3];
            }
            ?>

        </h1>


        <section id="partieGauche">

            <section class="evenement">
                <?php
                include_once('vue/class/evenement/evenement.class.php');

                //TODO: quand andrei aura fini l'api, refaire les conditions
                foreach($evenementJSON as $element){
                    $element = new Evenement($element);
                    $element->affiche('');
                }
                ?>
            </section>

        </section>

        <section id="partieDroite">

            <div> <a id="hautDiscution" href="#basDiscution">  Bas de la discution  </a> </div>

            <?php
            include_once('vue/class/discution/discutionEntreAmis.class.php');
            include_once('vue/class/liste/listeACommenter.class.php');

            $liste = new ListeACommenter('Discution des personnes invité');

            foreach($listeDiscutionJSON as $discutionJSON){
                $liste->ajoute(new DiscutionEntreAmis($discutionJSON));
            }
            $liste->affiche('discution', 'restaurant');
            ?>

            <div> <a id="basDiscution" href="#hautDiscution">Haut de la discution </a> </div>


        </section>
    </section>

</section>
</body>
</html>

