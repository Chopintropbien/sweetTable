<?php

class Liste{

    protected $list;

    public function __construct(){
        $this->liste = array ();
    }

    public function ajoute($element){
        $this->liste[] = $element;
    }

    public function  affiche($id_list, $class_li, $element_en_plus = false){
        echo '<ul id="' . $id_list . '" class="liste">';
            $this->affiche_liste($class_li, $element_en_plus);
        echo '</ul>';

    }

    protected function affiche_liste($class_li, $element_en_plus){
        $nbElement = count($this->liste);

        for($i = 0; $i < $nbElement ; $i++){
            echo '<li class="'.$class_li.'">';
            $this->liste[$i]->affiche($i, $element_en_plus);
            echo '</li>' ;
            if($i != $nbElement-1){
                echo '<hr id="'.($i+1).'ligne"/>';
            }
        }
    }

}