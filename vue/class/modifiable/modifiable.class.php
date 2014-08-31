<?php


class Modifiable{

    private $objet;
    private $lien_pour_modifier;

    public function __construct($objet, $lien_pour_modifier){
        $this->objet = $objet;
        $this->lien_pour_modifier = $lien_pour_modifier;
    }

    public function affiche($i, $element_en_plus){
        $this->objet->affiche($i, $element_en_plus);
        echo '<div class="modifiable"><a href="'.$this->lien_pour_modifier.'"> Modifier </a></div>';
    }
}