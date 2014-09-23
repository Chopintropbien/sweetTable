<?php

include_once('vue/class/restaurant/restaurant_basic.class.php');


class Restaurant_complet extends Restaurant_basic{

    protected $adresse;
    protected $tel;


    public function __construct($nom, $photo, $note, $prix, $nb_avis, $liste_cathegorie, $uid_restaurant, $adresse, $tel){
        parent::__construct($nom, $photo, $note, $prix, $nb_avis, $liste_cathegorie, $uid_restaurant);
        $this->adresse = $adresse;
        $this->tel = $tel;
    }
    // if $ecrire une revue => apparait le button ecrire une revue
    protected  function affichePartieDroitePhoto($i, $ecrire_revue = false){

        parent::affichePartieDroitePhoto($i, $ecrire_revue, 'restaurant_complet');

        echo '<aside>'; // coordonné restau
            echo '<address>'. $this->adresse .'</address>';
            echo '<p>'.$this->tel.'</p>';
        echo '</aside>';

    }
    // if $ecrire une revue => apparait le button ecrire une revue
    public function affiche($i, $ecrire_revue = false){
        echo '<img src="'.$this->photo .'"></img>';
        echo '<section>'; // a droite de la photo
        $this->affichePartieDroitePhoto($i, $ecrire_revue);
        echo '</section>';

    }
}