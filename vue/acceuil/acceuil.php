<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"></meta>
    <link href="http://localhost/Meittopi/css/base.css" rel="stylesheet"></link>
    <link href="http://localhost/Meittopi/css/menuPricipal/navigateur/navigateur.css" rel="stylesheet"></link>
    <link href="http://localhost/Meittopi/css/classDaffichage/affichageRevueEtEvenement/evenement.class.css" rel="stylesheet"></link>
    <link href="http://localhost/Meittopi/css/classDaffichage/affichageRevueEtEvenement/revue.class.css" rel="stylesheet"></link>
    <link href="http://localhost/Meittopi/css/classDaffichage/affichageRevueEtEvenement/listeRevueEtEvenement.class.css" rel="stylesheet"></link>
    <link href="http://localhost/Meittopi/css/classDaffichage/profil/profilPageAcceuil.class.css" rel="stylesheet"></link>
    <link href="http://localhost/Meittopi/css/menuPricipal/acceuil/acceuil.css" rel="stylesheet"></link>
    <title>

        Acceuil

    </title>
</head>
<body>
<section class="global">
<nav id="nav"></nav>
<section id="partiePrincipale">
<h2 id="mettopi"></h2>
<hr></hr>
<section id="partieGauche">
<h2></h2>



<?php

    include_once('vue/class/liste/liste.class.php');
include_once('vue/class/revue/revueDeQuelquUn.class.php');

    $liste = new Liste();
    foreach($listeAcceuil as $element){
        $liste->ajoute(new RevueDeQuelquUn('$element', $element));
    }
    $liste->affiche('','');
?>
<ul id="listeRevueEtEvenement">




<li id="li0">
    <img id="0" class="" src="http://localhost/Meittopi/image/profil_vide.png"></img>
    <article id="articleStructurant0" class="">
        <time id="time0" class="">

            il y a 2 min

        </time>
        <h6 id="titre0" class="">
            <a id="lienPersonne0" class="" href="sds">
                <strong id="0" class="">

                    Andreï Kucharavy

                </strong>
            </a>
                                        <span id="0" class="aCreerUnEvenement">

                                             à creé un événement

                                        </span>
        </h6>
        <section id="sectionStructurante0" class="">
            <ul id="listePhotoEvenement0" class="">
                <li id="placePhotoEvevement00" class="">
                    <img id="0" class="" src="http://localhost/Meittopi/image/profil_vide.png"></img>
                </li>
                <li id="placePhotoEvevement10" class="">
                    <img id="0" class="" src="http://localhost/Meittopi/image/profil_vide.png"></img>
                </li>
            </ul>
            <section id="2emSectionStructurante0" class="">
                <a id="lienEvenement0" class="" href="sd">
                    <h1 id="0" class="">

                        Sorie chez j aime comme tous les diamnche!!!!!!

                    </h1>
                </a>
                <time id="0" class=""></time>
                <article id="listeInviter0" class="">
                                                <span id="vaVenir0" class="">
                                                    <a id="vaVenirLien0" class="" href="sss">
                                                        <strong id="0" class="">

                                                            Mehdi

                                                        </strong>
                                                    </a>
                                                    <span id="0" class="vaVenir">

                                                         vient, 

                                                    </span>
                                                </span>
                                                <span id="estInvite0" class="">
                                                    <a id="estInviteLien0" class="" href="def">
                                                        <strong id="0" class="">

                                                            Lauriane

                                                        </strong>
                                                    </a>
                                                    <span id="0" class="estInvite">

                                                         est invité(e), 

                                                    </span>
                                                </span>
                </article>
                <p id="0" class="">

                    Alors, comme d ab, on va chez jaime et on mange pl…

                </p>
            </section>
        </section>
        <p id="0" class="messagePerso">
            <strong>

                Andreï Kucharavy :

            </strong>

            Je veux absolument que tu viennes!!!!! J aimerais …

        </p>
    </article>
</li>
<hr id=""></hr>
<li id="li1">
    <img id="1" class="" src="http://localhost/Meittopi/image/profil_vide.png"></img>
    <article id="articleStructurant1" class="">
        <time id="time1" class="">

            14/02/2014

        </time>
        <h6 id="titre1" class="">
            <a id="lienPersonne1" class="" href="sds">
                <strong id="1" class="">

                    Andreï Kucharavy

                </strong>
            </a>
                                        <span id="1" class="aEcritSur">

                                             à érit sur 

                                        </span>
            <a id="lienRestau1" class="" href="dggggf">
                <mark id="1" class="">

                    Chez J'aime

                </mark>
            </a>
        </h6>
        <div id="noteRestau1" class="">
            <canvas width="23" height="23"></canvas>
            <canvas width="23" height="23"></canvas>
            <canvas width="23" height="23"></canvas>
        </div>
        <p id="1" class="">

            Oui, j'ai vraime aimer. les pizza sont pas cher du…

        </p>
        <section id="blocPertinanceAvis1" class="">
            <h6 id="1" class="cetteAvisEstIl">

                Cette avis est-il...?

            </h6>
            <div id="boutton1" class="">
                <div id="utileButton1" class="utileButton">
                                                <span id="utile1" class="utile">

                                                    Utile

                                                </span>
                </div>
                <div id="droleButton1" class="droleButton" style="border: 1px inset rgb(255, 132, 0);">
                                                <span id="drole1" class="drole">

                                                    Drôle

                                                </span>
                    <img src="http://localhost/Meittopi/image/check.png"></img>
                </div>
                <div id="coolButton1" class="coolButton" style="border: 1px inset rgb(255, 132, 0);">
                    <span id="cool1" class="cool"></span>
                    <img src="http://localhost/Meittopi/image/check.png"></img>
                </div>
            </div>
        </section>
        <article id="blocCompliment1" class="">
            <input id="ecrireCompliment1" class="ecrireCompliment" type="texte" placeholder="Envoyer un compliment" style="display: none;"></input>
            <textarea id="texteCompliment1" class="" style="display: block;"></textarea>
            <div id="buttonsCompliment1" class="" style="display: block;">
                <p id="annulerEcritureCompliment1" class="annulerEcritureCompliment">

                    Annuler

                </p>
                <input id="envoyerCompliement1" class="envoyerCompliement" type="button" value="Envoyer"></input>
            </div>
        </article>
    </article>
</li>
<hr id=""></hr>








<li id="li2">

    <img id="2" class="" src="http://localhost/Meittopi/image/profil_vide.png"></img>
    <article id="articleStructurant2" class="">
        <time id="time2" class="">

            14/02/2014

        </time>
        <h6 id="titre2" class="">
            <a id="lienPersonne2" class="" href="sds">
                <strong id="2" class="">

                    Andreï Kucharavy

                </strong>
            </a>
                                        <span id="2" class="aEcritSur">

                                             à érit sur 

                                        </span>
            <a id="lienRestau2" class="" href="dggggf">
                <mark id="2" class="">

                    Chez J'aime

                </mark>
            </a>
        </h6>
        <div id="noteRestau2" class="">
            <canvas width="23" height="23"></canvas>
            <canvas width="23" height="23"></canvas>
            <canvas width="23" height="23"></canvas>
            <canvas width="23" height="23"></canvas>
            <canvas width="23" height="23"></canvas>
        </div>
        <p id="2" class="">

            Oui, j'ai vraime aimer. les pizza sont pas cher du…

        </p>



        <section id="blocPertinanceAvis2" class="">
            <h6 id="2" class="cetteAvisEstIl">

                Cette avis est-il...?

            </h6>
            <div id="boutton2" class="">
                <div id="utileButton2" class="utileButton" style="border: 1px inset rgb(255, 132, 0);">
                                                <span id="utile2" class="utile">

                                                    Utile

                                                </span>
                    <img src="http://localhost/Meittopi/image/check.png"></img>
                </div>
                <div id="droleButton2" class="droleButton">
                                                <span id="drole2" class="drole">

                                                    Drôle

                                                </span>
                </div>
                <div id="coolButton2" class="coolButton" style="border: 1px inset rgb(255, 132, 0);">
                                                <span id="cool2" class="cool">

                                                    Cool

                                                </span>
                    <img src="http://localhost/Meittopi/image/check.png"></img>
                </div>
            </div>
        </section>


        <article id="blocCompliment2" class="">
            <input id="ecrireCompliment2" class="ecrireCompliment" type="texte" placeholder="Envoyer un compliment"></input>
            <textarea id="texteCompliment2" class="" style="display: none;"></textarea>
            <div id="buttonsCompliment2" class="" style="display: none;">
                <p id="annulerEcritureCompliment2" class="annulerEcritureCompliment">

                    Annuler

                </p>
                <input id="envoyerCompliement2" class="envoyerCompliement" type="button" value="Envoyer"></input>
            </div>
        </article>
    </article>
</li>
</ul>
</section>
<section id="partieDroite"></section>
</section>

</section>
</body>
</html>

