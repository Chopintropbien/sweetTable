<?php

if(true/*isset($_POST['nom_restau'])  && isset($_POST['adresse_1']) && isset($_POST['code_postal']) &&
    isset($_POST['ville']) && isset($_POST['pays'])*/){

    include('vue/search/option/array_name.php');

    // si c'est l'admin ajouter le restaurant a la base de donne
    if($_SESSION['uid'] == 'user21'){


        $uid = $_POST['nom_restau'];
        $uid .= $_POST['adresse_1'];
        if(isset($_POST['adresse_2'])) $uid .= $_POST['adresse_2'];
        $uid .= $_POST['code_postal'];
        $uid .= $_POST['ville'];
        $uid .= $_POST['pays'];
        //echo $uid;

        include('model/ajoute_restaurant_db.php');
        //var_dump(ajoute_restaurant_db($uid, $_POST['nom_restau'], $_POST['date_ouverture'],  $_POST['horraire_admin']));

        include('model/attache_location.php');

        // pays
        //attache_location($_POST['pays'] , $uid);


        // manage the tag

        $cuisine_array = [];
        foreach($cuisines_name as $name){
            if(isset($_POST[$name])) $cuisine_array[] = $name;
        }
        $fonction_array = [];
        foreach($fonctionnalite_name as $name){
            if(isset($_POST[$name])) $fonction_array[] = $name;
        }
        include_once('model/manage_tag.php');
        //manage_tag('aaaUS', $cuisine_array, $fonction_array);



        // apload photo
        include_once('model/apload_photo.php');
        if($_FILES['1photo']) apload_photo('1photo', $GLOBALS['photo_size'], 'restaurant', 'aaaUS');
        //if($_FILES['2photo']) $message_txt = add_photo('2photo', $message_txt, $saut_ligne);
        //if($_FILES['3photo']) $message_txt = add_photo('3photo', $message_txt, $saut_ligne);
    }

    //envoyer un mail à l'admin
    else{
        if(isset($_POST['nom_restau']) && isset($_POST['adresse_1']) &&
            isset($_POST['code_postal']) && isset($_POST['ville']) && isset($_POST['pays'])){

            $saut_ligne = ' ';

            $message_txt = 'Nom du restau: ' . $_POST['nom_restau'] . $saut_ligne;
            $message_txt .= 'Adresse 1: ' . $_POST['adresse_1'] . $saut_ligne;
            $message_txt .= 'Adresse 2: ' . $_POST['adresse_2'] . $saut_ligne;
            $message_txt .= 'CP: ' . $_POST['code_postal'] . $saut_ligne;
            $message_txt .= 'ville: ' . $_POST['ville'] . $saut_ligne;
            $message_txt .= 'pays: ' . $_POST['pays'] . $saut_ligne;

            $message_txt .= 'tel: ' . $_POST['tel'] . $saut_ligne;
            $message_txt .= 'site_internet: ' . $_POST['site_internet'] . $saut_ligne;
            $message_txt .= 'remarque: ' . $_POST['remarque'] . $saut_ligne;
            $message_txt .= 'date_ouverture: ' . $_POST['date_ouverture'] . $saut_ligne;

            // type de cuisine
            $message_txt .= 'Type de cuisine : '. $saut_ligne;

            foreach($cuisines_name as $name){
                if(isset($_POST[$name])) $message_txt .= $name . ': ' . $_POST[$name] . $saut_ligne;
            }

            // fonctionnalite
            $message_txt .= 'Fonctionnalite : '. $saut_ligne;

            foreach($fonctionnalite_name as $name){
                if(isset($_POST[$name])) $message_txt .= $name . ': ' . $_POST[$name] . $saut_ligne;
            }

            function add_photo($name_photo, $message_txt, $saut_ligne){
                // photo
                if ($_FILES[$name_photo]['error'] > 0) $message_txt .= 'erreur dans le chargement de  : '.$name_photo. $saut_ligne;
                else{
                    $extensions_valides = array( 'jpg' , 'jpeg'  , 'png' );

                    //1. strrchr renvoie l'extension avec le point (« . »).
                    //2. substr(chaine,1) ignore le premier caractère de chaine.
                    //3. strtolower met l'extension en minuscules.
                    $extension_upload = strtolower(  substr(  strrchr($_FILES[$name_photo]['name'], '.')  ,1)  );
                    if ( in_array($extension_upload,$extensions_valides) ){
                        $message_txt .= $name_photo .' : '.base64_encode(file_get_contents($_FILES[$name_photo]['tmp_name'])). $saut_ligne;
                    }
                }
                return $message_txt;
            }

            if($_FILES['1photo']) $message_txt = add_photo('1photo', $message_txt, $saut_ligne);
            if($_FILES['2photo']) $message_txt = add_photo('2photo', $message_txt, $saut_ligne);
            if($_FILES['3photo']) $message_txt = add_photo('3photo', $message_txt, $saut_ligne);

            include('controller/envoie_mail.php');
            $envoie_mail_succed = envoie_mail($_SESSION['name'], $_SESSION['speudo'], 'mollierlauriane@gmail.com', 'Nouveau restaurant SweetTable', $message_txt, '');


        }
    }
}