<?php

// TODO: regler les probleme des includes mais a part ca ca marche

    include('modele/connexion/getPassword.php');

    $_POST['motdepasseInscrit'] = sha1($_POST['motdepasseInscrit']);

    if($_POST['motdepasseInscrit'] == getPasseworld($_POST['emailInscrit'])){
        if( isset($_POST['sectionActive'])){
            //TODO setcookie ne marche pas est du fait que c'est localhost??
            setcookie('email', $_POST['emailInscrit'], time() + 365 * 24 * 3600, null, null, false, true);
            setcookie('motDePasse', $_POST['motdepasseInscrit'], time() + 365 * 24 * 3600, null, null, false, true);
        }
        include('controleur/acceuil/acceuil.php');
    }
    else{
        include('identificationEchouee.php');
    }