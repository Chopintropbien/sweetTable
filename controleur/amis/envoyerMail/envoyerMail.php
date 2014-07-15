<?php

//TODO: faire la fonction pour envoyer des email

session_start();
$_SESSION['email'] = 'lauriane.mollier@epfl.ch';
$_SESSION['speudo'] = 'Lauriane Mollier';

$addressMail = [];
$bool = true;
$i = 1;
// TODO: faire un fonction qui marche avec les regex
while($bool){
    $addressMail[] = $_POST[i + 'adressEmail'];
    if(end($addressMail) == '') $bool = false;
    ++$i;
    echo end($addressMail);
}

$ppp = 'lauriane.mollier@epfl.ch';
$addressMail = 'mollierlauriane@gmail.com';

// configurer le passage a la ligne
if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-].[a-z]{2,4}$#", $_SESSION['email'])){
    $passage_ligne = "\r\n";
}
else{
    $passage_ligne = "\n";
}

//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========

$boundary = "-----=".md5(rand());
$sujet = "Viens decouvrir Meittopi!";

// hearder
$header = "To: <".$addressMail.">" .$passage_ligne;

$header.= "From: \"".$_SESSION['speudo']."\" <".$_SESSION['email'].">".$passage_ligne;
$header.= "Reply-to: \"".$_SESSION['speudo']."\"<".$_SESSION['email']."\">".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;


$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
if(mail($_SESSION['email'], $sujet, $message ,$header)){
    $messageAffiche = 'Les mail ont bien été envoyer';
}
else{
    $messageAffiche = 'Un probleme à enpêcher l\'envoie des mail';
}



include('../vue/amis/envoyerMail/envoyerMail.php');

