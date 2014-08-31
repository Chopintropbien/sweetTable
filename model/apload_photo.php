<?php


// type: profil, restaurant, revue

function apload_photo($name, $maxsize, $type, $uid){

    $error = '';
    $server_response = '';

    if ($_FILES[$name]['error'] > 0) echo $error = 'chargement';
    elseif ($_FILES[$name]['size'] > $maxsize) $error = 'size';
    else{
        $extensions_valides = array( 'jpg' , 'jpeg'  , 'png' );

        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES[$name]['name'], '.')  ,1)  );
        if ( in_array($extension_upload,$extensions_valides) ){
            echo 'eeee';
            $photo_base64 = base64_encode(file_get_contents($_FILES[$name]['tmp_name']));
            // add to the data base
            $url = 'http://localhost:5000/image';

            $data = array('uid' => $uid, 'payload' => $photo_base64, 'type' => $type);
            $data = json_encode($data);
            $options = array(
                'http' => array(
                    'header'  => "Content-Type: application/json\r\n" .
                        "Accept: application/json\r\n",
                    'method'  => 'POST',
                    'content' => $data
                )
            );
            $context  = stream_context_create($options);
            $error = false;
            $server_response = file_get_contents($url, false, $context);
        }
        else $error = 'format';
    }


    return array('error' => $error, 'server_response' => $server_response);

}
