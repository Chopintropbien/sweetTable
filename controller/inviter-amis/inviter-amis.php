<?php

include_once('controller/envoie_mail.php');


// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){


    // dire quel message afficher
    $tentative_envoie_de_mail = false;
    $tout_mail_envoie;
    $error_que_certain_mail; // true -> certain mail ont ete envoyé, d'autre pas false -> aucun mail n'a été envoyé

    // envoie des mails
    if(isset($_POST['1adressEmail']) && isset($_POST['mail'])){
        // TODO: regex
        //=====Déclaration des messages au format texte et au format HTML.
        $message_txt = $_POST['mail'];
        $message_html = '<html><head></head><body>'.nl2br ($_POST['mail']).'</body></html>';


        $i = 1;
        $verification_send_mail = [];
        while(isset($_POST[$i . 'adressEmail'])){
            if($_POST[$i . 'adressEmail'] != ''){
                $verification_send_mail[] = envoie_mail($_SESSION['name'], $_SESSION['email'],
                                                        $_POST[$i . 'adressEmail'], $sujet, $message_txt, $message_html);
            }
            ++$i;
        }


        // dire quel message afficher
        $tentative_envoie_de_mail = true;
        $tout_mail_envoie = true;
        $error_que_certain_mail = false; // true -> certain mail ont ete envoyé, d'autre pas false -> aucun mail n'a été envoyé

        foreach($verification_send_mail as $succed){
            $tout_mail_envoie = $tout_mail_envoie && $succed;
            $error_tous_mail = $error_tous_mail || $succed;
        }
    }
    include ('vue/inviter-amis/inviter-amis.php');
}
else include('home.php');

