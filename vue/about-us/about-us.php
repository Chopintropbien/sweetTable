
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
                voyage ne serait pas complet si on ne n'y venais pas aussi pour découvrir la culture italienne,
                la vie à l'italienne et... <strong>la nourriture !</strong>
                <br/>
                <br/>
                Ah... la nourriture italienne! Ces simples mots commencent déjà à me titiller les papilles!
                Mais ou savoir aller manger? Demander un italien dans la rue? Quand on se retrouve au plein milieu du vatican avec
                tout ces touristes, pas si facile.<br/>
                Alors on décida d'utiliser une application spécialiser dans ce genre de conseil: trouver un bon restaurant!

                <br/> <br/>
                <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/restau_typique.jpg"/>

                Donc voilà partie pour un des meilleurs restaurantS de Rome (celon cette apllication). Arrivée sur place, quel
                deception! C'était un restaurant italien qui visait une clientelle majoritairement anglophone. Je n'ai rien contre les anglais
                ou les
                américans, mais leur goût ne correspond pas tout à fait au notre.

                <br/> Le deuxième teste avec cette application n'a gère mieux marcher. A la troisième tentative, on abandonna l'idée
                de se faire aider par notre téléphone portable et on chercha un restaurant à l'instin: on tomba sur un restaurant très
                peu touristique avec un service très rustique mais mamamia que c'était bon!!
                <br/>

            </p>

            <h5> Mais pourquoi cette application n'a-t-elle pas marché? </h5>

            <p>
                Un peu décu de cette aplication (qui est tout de même assez célèbre), on se demenda pourquoi elle n'avait pas bien
                fonctionné.

                Ce genre d'application a un système de notation global. Ce qui fait que le meilleur restaurant sera défini en fonction
                du goût moyen des personne qui l'utilise. Il devait donc y avoir à Rome une majorité de touriste anglais qui utilisait
                cette aplication. <br/>

                N'ayant pas les mêmes goûts que la majorité, on prefera se fier à notre intuition,

            </p>

            <h5> Voilà notre idée en route! </h5>

            <p>
                <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/lauriane_geek.jpg"/>
                L'idée est toute simple: la note que l'on voit affiché pour un restaurant dois être une note personnalisé: 4 étoiles! Nous pensons que ce restaurant
                va vous plaire personnellement. Et non pas: tous les utilisateurs qui ont déjà visité ce restaurant ont donné une note moyenne
                de 4 sur 5.
            </p>

            <h5> Comment cela fonctionne-t-il ?  </h5>

            <a class="important_button" href="<?php echo $GLOBALS['host'];?>/mode_de_fonctionnement.php">
                Back-end et projet
            </a>


        </article>

    </section>

    <section id="partieDroite">


        <!-- presentation de l'equipe -->

        <h2>L'équipe</h2>

        <ul>
            <li>
                <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/lauriane_glace.jpg"/>
                <h5> Lauriane Mollier </h5>
            </li>
            <li>
                <h6> Lieu d'étude: </h6>
                <ul>
                    <li> - Lycéee expérimentale, Saint-Nazaire</li>
                    <li> - EPFL, Lausanne </li>
                </ul>
            </li>
            <li>
                <h6> Patrie gastronomique: </h6>
                <span>La Savoie:</span>
                <ul>
                    <li>-la fondu</li>
                    <li>-la galette savoyarde</li>
                    <li>-les rissoles</li>

                </ul>
            </li>
            <li>
                <h6> Description: </h6>
                <p>
                    Etant francaise, mais faisant ses études à Lausanne, son coeur balence entre le compté et le gruyère.
                    Si elle devait trancher, elle choisirai sans doute le gruyère, mais que vous ne vous y mépreniez pas: <br/>
                    Rien ne vaudra jamais l'abondance !
                </p>
            </li>
            <li>
                <h6> Role : </h6>
                <p>Font-end et marketing </p>
            </li>
        </ul>

        <ul>
            <li>
                <img src="<?php echo $GLOBALS['host'];?>/vue/image/about-us/andrei.jpg"/>
                <h5> Andreï Kucharavy </h5>
            </li>
            <li>
                <h6> Lieu d'étude: </h6>
                <ul>
                    <li> - Ecole polytechnique, Paris</li>
                    <li> - EPFL, Lausanne </li>
                    <li><br/></li>
                </ul>
            </li>
            <li>
                <h6> Patrie gastronomique: </h6>
                <span>L'Alsace:</span>
                <ul>
                    <li>-mänale </li>
                    <li>-spätzele </li>
                    <li>-prëtzele </li>

                </ul>
            </li>
            <li>
                <h6> Description: </h6>
                <p>
                    Toujours partent pour un petit restaurant, il est actuellement en "depression gastronomique" car
                    il fait son doctorat à Kansas City, au Etats-Unis. Vivement de retour en europe pour une cuisine sans OGM,
                    sans ormone de croissance mais surtout avec du gout!!!
                </p>
            </li>

            <li>
                <h6> Role : </h6>
                <p> Back-end </p>
            </li>
        </ul>



        <h2> Nous contacter</h2>
        <address>mollierlauriane@gmail.com</address>



    </section>

</section>




</body>

</html>