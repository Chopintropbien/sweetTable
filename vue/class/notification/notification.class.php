<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/27/14
 * Time: 11:51 AM
 */

class Notification{

    // TODO: la gestion des differents type de notification
    private $personneQuiFaitLaNotif;
    private $photoPersonneQuiFaitLaNotif;
    private $lienNotif;
    private $dateNotif;
    private $typeNotif;

    public function __construct($json){
        $this->personneQuiFaitLaNotif = $json[0];
        $this->photoPersonneQuiFaitLaNotif = $json[1];
        $this->dateNotif = $json[2];
        $this->lienNotif = $json[3];
        $this->typeNotif = $json[4];
    }
    public function affiche(){
        echo '<img src="'.$this->photoPersonneQuiFaitLaNotif.'"/>';
        echo '<article>';
            echo '<time>'.$this->dateNotif.'</time>';
            $texteQuiIntroduitLaNotif = ' vous as ecrit un ';
            $typeDeNotif = 'compliement';
            echo '<a>'.$this->personneQuiFaitLaNotif.'</a>'.$texteQuiIntroduitLaNotif.'<a href"'.$this->lienNotif.'">'.$typeDeNotif.'</a>';
        echo '</article>';

    }


}