<?php

include_once('vue/class/restaurant/restaurant_basic.class.php');

class Revue_d_une_personne {

    private $restaurant;

    private $uid_revue;
    private $titre_revue;
    private $texte_revue;

    public function __construct(){

        $this->restaurant = new Restaurant_basic(['Chez jaime', 'http://localhost/Meittopi/image/profil_vide.png', 3.5, 4, -1, ['italien', 'pizza'], '']);

        $this->uid_revue = 'uid';
        $this->titre_revue = 'Un super titre de la mort qui tue';
        $this->texte_revue = ' zj euof quf qf qjk jgn qmug mqifbg qeg mqebg iqehbg qskfbg qkghaîuehg aeàrgç';

    }

    public function affiche($i, $modifier_revue = false){

        echo '<div class="restaurant">';
            $this->restaurant->affiche($i);
        echo '</div>';

        echo '<h5>'.$this->titre_revue.'</h5>';
        echo '<p>'.$this->texte_revue.'</p>';

        // modifier les revue
        if ($modifier_revue) echo '<aside><a> Modifier</a></aside>';

    }

}