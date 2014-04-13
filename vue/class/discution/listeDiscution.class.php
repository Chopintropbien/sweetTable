<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 4/12/14
 * Time: 2:11 PM
 */

class ListeDiscution {
    private $afficherCategorie;
    private $discutions;

    public function __construct($afficherCategorie){ // boolean si on veut afficher la categorie
        $this->afficherCategorie = $afficherCategorie;
        $this->discutions = array();
    }

    public function ajoute($discution){
        $this->discutions[] = $discution;
    }

    public function  affiche(){
        include('vue/class/discution/francais/listeDiscution.php');

        echo '<table>';
            echo '<tr>';
                echo '<td class="auteurTitre">'.$auteur.'</td>';
                echo '<td class="conversationTitre">'.$conversation.'</td>';

                if($this->afficherCategorie){
                    echo '<td class="categorieConversationTitre">'.$categorie.'</td>';
                }

                echo '<td class="reponseTitre">'.$reponse.'</td>';
				echo '<td class="derniereReponseTitre">'.$derniereReponse.'</td>';
            echo '</tr>';

            $nbDiscution = count($this->discutions);
            for($i = 0; $i<$nbDiscution; ++$i){
                echo '<tr>';
                    $this->discutions[$i]->affiche($i);
                echo '</tr>';
            }



        echo '</table>';

    }
} 
