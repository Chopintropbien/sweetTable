<?php


// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){

    // ajouter une revue
    if($_POST['note'] != 0 && isset($_POST['uid_restau']) && isset($_POST['titre']) && isset($_POST['revue'])){
        include('model/ajoute_revue.php');
        ajoute_revue($_SESSION['uid'], $_POST['uid_restau'], $_POST['titre'], $_POST['revue'], $_POST['note']);
    }

    include ('vue/write-a-review/write-a-review.php');
}
else include('home.php');


