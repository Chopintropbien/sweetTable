<?php

function envoie_mail($name_user, $email_user, $email_destinataire, $sujet, $message_txt, $message_html){

// configurer le passage a la ligne
    if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-].[a-z]{2,4}$#", $name_user)){
        $passage_ligne = "\r\n";
    }
    else $passage_ligne = "\n";

    $boundary = "-----=".md5(rand());


// hearder
    $header = "To: <".$email_destinataire.">" .$passage_ligne;

    $header.= "From: \"".$name_user."\" <".$email_user.">".$passage_ligne;
    $header.= "Reply-to: \"".$name_user."\"<".$email_user."\">".$passage_ligne;
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
    if(mail($email_destinataire, $sujet, $message ,$header)){
        return true;
    }
    else return false;

}