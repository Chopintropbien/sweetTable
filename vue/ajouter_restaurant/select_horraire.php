<?php

    $options = '<option value="null"> H </option>';
    for($i = 0; $i< 24; ++$i){
        $options .= '<option value="'. $i .'"> '. $i .'</option>';
    }

    echo $options;



