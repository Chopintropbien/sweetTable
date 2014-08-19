
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/about-us/about-us.css"/>

    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<section id="body">

    <section id="partieGauche">

        <h2>L'histoire de SweetTable</h2>
        <article>

            <p><!--
                <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/restau_typique.jpg"/> -->
                <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/vatican.jpg"/>

                L'histoire de SweetTable commence avec un voyage à Rome à la découverte de la chappelle sixtine, du colisée,
                de la fontaine de Trevis,... de tous les autres incroyables monuments de cette ville si magnifique. <br/>
                Mais un tel
                voyage ne serait pas complet si on ne n'y venais pas pour découvrir dans le même temps la culture italienne,
                comment les personnes vivent, pensent et... commement elle mangent.
                <br/>
                <br/>
                Ah... la nourriture italienne! Ces simples mots commence déjà à me titiller les papilles!
                Mais ou savoir aller manger? Demander un italien dans la rue? Quand on se retrouve au plein milieu du vatican avec
                tout ces touristes pas facile.<br/>
                <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/restau_typique.jpg"/>
                Alors on décida d'utiliser une application spécialiser dans ce genre de conseil: trouver un bon restaurant!

                <br/> <br/>

                Donc voilà partie pour un des meilleurs restaurant de Rome (celon cette apllication). Arrivée sur place, quel
                deception! C'était un restaurant italien qui visait une cliantelle anglophone. Je n'ai rien contre les anglais les
                américans, mais leur goûts ne correspond pas tout à fait au notre.

                <br/> Le deuxième teste avec cette application n'a gère mieux marcher. A la troisième tentative, on abandonna l'idée
                de se faire aider par notre téléphone protable et on chercha un restaurant à l'instin: on tomba sur un restaurant très
                peu touristique: mamamia que c'était bon!!
                <br/>

            </p>

            <h5> Mais pourquoi cette application n'a-t-elle pas marché? </h5>

            <p>
                Ce genre d'application a un système de notation global.Ce qui fait que le meilleur restaurant sera défini en fonction
                du goût moyen des personne qui l'utilise. <br/>
                Mais la chaque personnes à des attentes différente face à un restaurant! Imaginez par exemple que vous aimer que vous
                aimer que le service soit efficasse, par contre que vous en avez pas grand chose à faire du choix de bière que propose
                le restaurant. Aimeriez-vous que l'on vous sugère un restaurant parce qu'il est très bien noté par les personnes qui
                font très attention au choix de bière mais pas du tout au service?

            </p>

            <h5> Voilà notre idée en route! </h5>

            <p>
                J'aimerais qu'une application puisse reconnaitre mes goûts et me conseiller que les restaurants que j'aime. Alors nous
                voila en train de coder!
                <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/lauriane_geek.jpg"/>
            </p>





        </article>

    </section>

    <section id="partieDroite">


        <!-- presentation de l'equipe -->

        <h2>L'équipe</h2>


        <table>
            <tr>
                <td>
                    <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/lauriane_glace.jpg"/>
                    <h5> Lauriane Mollier </h5>
                </td>
                <td>
                    <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/andrei.jpg"/>
                    <h5> Andreï Kucharavy </h5>
                </td>
            </tr>

            <tr>
                <td>
                    <h6> Lieu d'étude: </h6>
                    <ul>
                        <li> - Lycéee expérimentale, Saint-Nazaire</li>
                        <li> - EPFL, Lausanne </li>
                    </ul>
                </td>

                <td>
                    <h6> Lieu d'étude: </h6>
                    <ul>
                        <li> - Ecole polytechnique, Paris</li>
                        <li> - EPFL, Lausanne </li>
                    </ul>
                </td>
            </tr>

            <tr>
                <td>
                    <h6> Patrie gastronomique: </h6>
                    <span>La Savoie:</span>
                    <ul>
                        <li>-la fondu</li>
                        <li>-le farçon</li>
                        <li></li>
                    </ul>
                </td>
                <td>
                    <h6> Patrie gastronomique: </h6>
                    <span>L'Alsace:</span>
                    <ul>
                        <li>-mänale </li>
                        <li>-spätzele </li>
                        <li>-prëtzele </li>
                    </ul>
                </td>
            </tr>

            <tr>
                <td> <h6> Description: </h6> </td>
                <td> <h6> Description: </h6> </td>
            </tr>

            <tr>
                <td>  </td>
                <td>  </td>
            </tr>

        </table>



        <h2> Nous contacter</h2>
        <address>mollierlauriane@gmail.com</address>

    </section>

</section>




</body>

</html>