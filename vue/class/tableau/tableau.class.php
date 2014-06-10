<?php

class Tableau {

    private $listeAAfficher;

    public function __construct(){
        $this->listeAAfficher = array ();
    }

    public function ajoute($element){
        $this->listeAAfficher[] = $element;
    }

    public function affiche( $nbCol, $classtd, $idTableau){


        $nbElement = count($this->listeAAfficher);
        $nbElementRestant = $nbElement % $nbCol;
        $nbLigne = ($nbElement - $nbElementRestant) / $nbCol; // en esperant que c'est la division entiere

        echo '<table id="'.$idTableau.'">';

        // afficher toutes les lignes remplis

        for($i = 0; $i < $nbLigne; ++$i){
            echo '<tr>';
            for($j = 0; $j < $nbCol; ++$j){
                $indice = $i * $nbCol + $j;
                echo '<td class="'.$classtd.'">';
                    $this->listeAAfficher[$indice]->affiche($indice);
                echo '</td>';
            }
            echo '</tr>';
        }

        // afficher une ligne non remplis


        if($nbElementRestant != 0){
            echo '<tr>';
            for($j = 0; $j < $nbElementRestant; ++$j){
                $indice = $i * $nbCol * $nbLigne + $j;
                echo '<td class="'.$classtd.'">';
                    $this->listeAAfficher[$indice]->affiche($indice);
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }



} 