<?php


// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){

    // editer une revue
    if($_POST['note'] != 0 && isset($_POST['titre']) && isset($_POST['revue']) && $_POST['uid_revue']){
        include('model/modifie_revue.php');
        echo $_POST['uid_revue'];
        echo $_POST['titre'];
        modifie_revue($_POST['uid_revue'], $_POST['titre'], $_POST['revue'], $_POST['note']);
    }

    // modifier le profil
    include_once('model/modifie_profil.php');
    include_once('controller/fonction_annexe/check_date.php');
    include_once('controller/connexion/verification_donnee_inscription.php');
    if(isset($_POST['new_name']) && isset($_POST['jourDeNaissance']) && isset($_POST['moisDeNaissance']) && isset($_POST['anneeDeNaissance'])){

        $birthday = check_date($_POST['jourDeNaissance'], $_POST['moisDeNaissance'], $_POST['anneeDeNaissance']);

        if(verification_name($_POST['new_name'])) $name = $_POST['new_name'];
        else $name = false;

        if($birthday || $name){
            modifie_profil($_SESSION['uid'], $name, $birthday);
        }

        // photo de profil
        include_once('model/apload_photo.php');
        if($_FILES['photo_profil']){
            apload_photo('photo_profil', $GLOBALS['photo_size'], 'profil', $_SESSION['uid']);
        }
    }

    // get profil
    include('model/get_profil.php');

    // avoir le profil de l'utilisateur ou celui d'une autre, pour pouvoir le regarder.
    // $profil_user => true si c'est le propre profil de l'utilisateur
    if(isset($_GET['uid']) && $_GET['uid'] != $_SESSION['uid']){
        $profil_JSON = get_profil($_GET['uid'], true);
        $profil_user = false;
    }
    else{
        $profil_JSON = get_profil($_SESSION['uid'], true);
        $profil_user = true;
    }



    include('vue/profil/profil.php');
}

else include('controller/connexion/connexion_inscription.php');
