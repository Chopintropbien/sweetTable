<?php

//include('controleur/acceuil/acceuil.php');


// si l'utilisateur à été mémoriser
if(isset($_COOKIE['email']) && isset($_COOKIE['motDePasse'])){

    include('modele/connexion/getPassword.php');
    if($_COOKIE['motDePasse'] == getPasseworld($_COOKIE['email'])){
        include('controleur/acceuil/acceuil.php');
    }
    else{
        include('vue/connexion/connexion.php');
    }
}
// pour la connexion
elseif(isset($_POST['motdepasseInscrit']) && isset($_POST['emailInscrit'])){
    include('controleur/connexion/connexion.php');
}
// pour l'inscription
elseif( isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['confirmemail'])
     && isset($_POST['motdepasse']) && isset($_POST['jourDeNaissance']) && isset($_POST['moisDeNaissance'])
     && isset($_POST['anneeDeNaissance']) && isset($_POST['sexe'])){

    include('controleur/connexion/inscription.php');
}

else{
    include('vue/connexion/connexion.php');
}
