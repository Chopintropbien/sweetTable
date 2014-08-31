<?php


include_once('model/connexion/connexion_verification.php');

include_once('controller/connexion/verification_donnee_connexion.php');
include_once('controller/connexion/verification_donnee_inscription.php');

// si l'utilisateur à été mémoriser
include_once('controller/connexion/connexion_automatique.php');

// pour la connexion
if(isset($_POST['motdepasseInscrit']) && isset($_POST['emailInscrit'])){
    if(connexion_verification($_POST['motdepasseInscrit'], $_POST['emailInscrit'], isset ($_POST['sectionActive']))){
        include('controller/home/home.php');
    }
    else{
        include('controller/authentification_echouee/authentification_echouee.php');
    }

}
// pour l'inscription
elseif( isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['confirmemail'])
    && isset($_POST['motdepasse']) && isset($_POST['pays'])){

    include_once('model/connexion/inscription.php');
    include_once('model/connexion/inscription_verification.php');
    include_once('model/connexion/unique_adresse_mail.php');

    if (verification_donnee_inscription($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['confirmemail'],
        $_POST['motdepasse']) ){

        if (unique_adresse_mail($_POST['email'])){

            $uid = inscription_pour_verification($_POST['email'], $_POST['motdepasse']);
            if($uid){
                $error_connexion_db = ! inscription($_POST['prenom'], $_POST['nom'],  $uid);
                include('controller/home/home.php');
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
    else {
        $donne_pas_remplie_bien = true;
        include('vue/connexion/connexion.php');
    }
}

else{
    include('vue/connexion/connexion.php');
}