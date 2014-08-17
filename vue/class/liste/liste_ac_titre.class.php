<?php

include_once('vue/class/liste/liste.class.php');

class Liste_ac_titre extends Liste{

    private $titre;

    public function __construct($titre){
        $this->titre = $titre;
    }
    public function  affiche($id_list, $class_li, $element_en_plus = false){
        echo '<ul id="' . $id_list . '" class="liste">';
            echo '<li><h2>'.$this->titre.'</h2></li>';
            echo '<hr/>';
            parent::affiche_liste($class_li, $element_en_plus);
        echo '</ul>';
    }

}