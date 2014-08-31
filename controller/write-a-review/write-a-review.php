<?php


// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){

    // ajouter une revue
    if($_POST['note'] != 0 && isset($_POST['uid_restau']) && isset($_POST['titre']) && isset($_POST['revue'])){
        include('model/ajoute_revue.php');
        $uid_revue = ajoute_revue($_SESSION['uid'], $_POST['uid_restau'], $_POST['titre'], $_POST['revue'], $_POST['note']);

        var_dump($uid_revue);

        // ajouter les tag
        include('vue/search/option/array_name.php');
        $fonction_array = [];
        foreach($fonctionnalite_name as $name){
            if(isset($_POST[$name]) && $_POST[$name] == 'oui') $fonction_array[] = $name;
        }
        include_once('model/manage_tag.php');
        manage_tag($_POST['uid_restau'], [], $fonction_array);

        // apload photo
        include_once('model/apload_photo.php');
        if($_FILES['1photo_input']) apload_photo('1photo_input', $GLOBALS['photo_size'], 'review', $uid_revue);
        if($_FILES['2photo_input']) apload_photo('2photo_input', $GLOBALS['photo_size'], 'review', $uid_revue);
        if($_FILES['3photo_input']) apload_photo('3photo_input', $GLOBALS['photo_size'], 'review', $uid_revue);
    }

    include ('vue/write-a-review/write-a-review.php');
}
else include('controller/connexion/connexion_inscription.php');

