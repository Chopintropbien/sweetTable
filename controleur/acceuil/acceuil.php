<?php


include ('modele/acceuil/listeEvenRecent.php');
$listeAcceuil = get_liste_acceuil();

include ('modele/acceuil/profil.php');
$profilJSON = get_profil();

include('modele/acceuil/listeRestauConseille.php');
$listeRestauConseilJSON = get_liste_restau_recommende();

include ('vue/acceuil/acceuil.php');