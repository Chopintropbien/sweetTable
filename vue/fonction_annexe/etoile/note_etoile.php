<?php

function note_etoile($note, $tailleEtoile){
    $nbEtoileComplete = intval($note);
    $demiEtoile = ($note -$nbEtoileComplete == 0.5) ? true : false;

    if($note <= 2) $couleurEtoile = 'gold';
    elseif($note <= 4) $couleurEtoile = 'orange';
    else $couleurEtoile = 'red';

    for($e = 0; $e < $nbEtoileComplete; ++$e){
        echo '<canvas width="'.$tailleEtoile.'" height="'.$tailleEtoile.'" class="etoileComplete" style="color: '.$couleurEtoile.';">
                        </canvas>';
    }
    if($demiEtoile){
        echo '<canvas width="'.$tailleEtoile.'" height="'.$tailleEtoile.'" class="demiEtoile" style="color: '.$couleurEtoile.';"></canvas>';
    }

}