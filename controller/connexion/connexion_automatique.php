<?php

//include_once('controller/home/home.php');


include_once('model/connexion/connexion_verification.php');

include_once('controller/connexion/verification_donnee_connexion.php');
include_once('controller/connexion/verification_donnee_inscription.php');

// si l'utilisateur à été mémoriser
if(isset($_COOKIE['sweettable_email']) && isset($_COOKIE['sweettable_password'])){
    if (connexion_verification($_COOKIE['sweettable_password'], $_COOKIE['sweettable_email'], true, true)){
        include_once('controller/home/home.php');
    }
    else{
        include_once('controller/authentification_echouee/authentification_echouee.php');
    }
}
// pour la connexion
elseif(isset($_POST['motdepasseInscrit']) && isset($_POST['emailInscrit'])){
    if(connexion_verification($_POST['motdepasseInscrit'], $_POST['emailInscrit'], isset ($_POST['sectionActive']))){
        include_once('controller/home/home.php');
    }
    else{
        include_once('controller/authentification_echouee/authentification_echouee.php');
    }

}
// pour l'inscription
elseif( isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['confirmemail'])
    && isset($_POST['motdepasse']) && isset($_POST['jourDeNaissance']) && isset($_POST['moisDeNaissance'])
    && isset($_POST['anneeDeNaissance']) && isset($_POST['sexe'])){

    include_once('model/connexion/inscription.php');
    include_once('model/connexion/inscription_verification.php');
    include_once('model/connexion/unique_adresse_mail.php');

    if (verification_donnee_inscription($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['confirmemail'],
                                        $_POST['motdepasse'], $_POST['jourDeNaissance'], $_POST['moisDeNaissance'],
                                        $_POST['anneeDeNaissance'], $_POST['sexe'])){


        // TODO: faire en sorte qu'on ne nous bousille pas nos donnée
        // et faire en sorte d'avoir un message de confirmation

        if (unique_adresse_mail($_POST['email'])){

            $uid = inscription_pour_verification($_POST['email'], $_POST['motdepasse']);
            if($uid){
                $error_connexion_db = inscription($_POST['prenom'], $_POST['nom'], $_POST['jourDeNaissance'], $_POST['moisDeNaissance'],
                                                  $_POST['anneeDeNaissance'], $_POST['sexe'], $uid);

                include_once('controller/home/home.php');
            }
            else{
                $error_connexion_db_verification = true;
                include('vue/connexion/connexion.php');
            }
        }
        else{
            $email_deja_utilise = $_POST['email'];
            include_once('controller/authentification_echouee/authentification_echouee.php');
        }
    }
}

else{
    include('vue/connexion/connexion.php');
}