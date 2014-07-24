<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 8:49 AM
 */

class EvenementResume {
    private $photo;
    private $titre;
    private $dateEvenement;
    private $listeGensQuiParticipe;
    private $particiation;
    private $lienEvenement;

    public function __construct($json){
        // TODO: mettre les fonctions securisante ici
        $this->photo = $json[0];
        $this->titre = $json[1];
        $this->dateEvenement = $json[2];
        $this->listeGensQuiParticipe = $json[3];
        $this->particiation = $json[4];
        $this->lienEvenement = $json[5];
        $this->lieu = 'Chez j aime';
    }

    public function affiche($i){
        include('../vue/class/evenement/francais/evenementResume.php');

        echo '<img src="'.$this->photo.'" />'; // photo de l'evenement
        echo '<input type="button" class="petiteCroix"value ="+" id="'.$i.'supprimerEvenement"/>';
        echo '<article>';
            echo '<a><h6>'.$this->titre.'</h6></a>';
            echo '<section>';
                echo '<time>Le '. $this->dateEvenement.', chez </time>';
                echo '<a>'. $this->lieu.'</a>';
            echo ' </section>';
        /*
            echo '<p>'. $avec;
            for($j = 0; $j < count($this->listeGensQuiParticipe); ++$j){ // liste des gens qui participe
                echo'<a>'.$this->listeGensQuiParticipe[$j][0].'</a>';
                if($j != count($this->listeGensQuiParticipe) - 1){
                    echo ',';
                }
            }
            echo '</p>';
        */
            switch($this->particiation){
                case 2:
                    $reponseInviter = $peutEtre ;
                    break;
                case 3:
                    $reponseInviter = $vient;
                    break;
                default:
                  // TODO: lancer une erreur
            }

            echo '<p>'.$participation.'<a>'.$reponseInviter.'</a></p>'; // participation de l'utilisiateur.
        echo '</article>';










    }
}