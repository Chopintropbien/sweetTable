<?php


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