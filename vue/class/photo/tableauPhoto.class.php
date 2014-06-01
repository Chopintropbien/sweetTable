<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 5/29/14
 * Time: 12:42 PM
 */

class TableauPhoto {

    private $listePhoto;

    public function __construct($json){
        $this->listePhoto = array ();
        foreach($json as $photo){
            $this->listePhoto[] = $photo;
        }
    }

    public function affiche( $nbCol){


        $nbPhoto = count($this->listePhoto);
        $nbPhotoRestante = $nbPhoto % $nbCol;
        $nbLigne = ($nbPhoto - $nbPhotoRestante) / $nbCol; // en esperant que c'est la division entiere

        echo '<table id="tablePhoto">';

            // afficher toutes les lignes remplis

            for($i = 0; $i < $nbLigne; ++$i){
                echo '<tr>';
                    for($j = 0; $j < $nbCol; ++$j){
                        $indice = $i * $nbCol + $j;
                        echo '<td>';
                            echo '<img src="'.$this->listePhoto[$indice][0].'"/>';
                            echo '<p> Par <a href="'.$this->listePhoto[$indice][2].'">'.$this->listePhoto[$indice][1].'</a> </p>';
                        echo '</td>';
                    }
                echo '</tr>';
            }

            // afficher une ligne non remplis


            if($nbPhotoRestante != 0){
                echo '<tr>';
                for($j = 0; $j < $nbPhotoRestante; ++$j){
                    $indice = $i * $nbCol * $nbLigne + $j;
                    echo '<td>';
                        echo '<img src="'.$this->listePhoto[$indice][0].'"/>';
                        echo '<p> Par <a href="'.$this->listePhoto[$indice][2].'">'.$this->listePhoto[$indice][1].'</a> </p>';
                    echo '</td>';
                }
                echo '</tr>';
            }
        echo '</table>';
    }



} 