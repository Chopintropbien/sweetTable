<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 2:37 PM
 */

class Amis{
    private $photo;
    private $speudo;
    private $villeDHabitation;
    private $nombreRevus;
    private $lien;

    public function __construct($json){
        //TODO: mettre les fonctions de securite
        $this->photo = $json[0];
        $this->speudo = $json[1];
        $this->villeDHabitation = $json[2];
        $this->nombreRevus = $json[3];
        $this->lien = $json[4];
    }

    public function affiche($i){
        include('../vue/class/amis/francais/amis.php');

        echo '<img src="'.$this->photo.'"/>';

        echo '<article>'; // a droite de la photo
        echo '<h6> <a>'.$this->speudo.'</a> </h6>';
        echo '<p>'.$this->villeDHabitation.'</p>';
        echo '<p> '.$this->nombreRevus.$revus.'</p>';
        echo '</article>';

    }

}

