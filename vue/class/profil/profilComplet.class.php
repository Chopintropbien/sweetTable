<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/27/14
 * Time: 10:24 AM
 */
include('profilNotification.class.php');
class ProfilComplet extends ProfilNotification {
    private $tableauDeCaracteristique;

    public function __construct($json){
        parent::__construct($json);
        $this->tableauDeCaracteristique = $json[12];
    }

    public function affiche($afficheAjouterChamps){
        include('../vue/class/profil/francais/profilComplet.php');

        echo '<article id="profil_profil">';
            parent::affiche(); // affiche les notifications du profil
            echo '<hr/>';

                // affiche la liste des caracteristique
            echo '<ul id="infoPersonnelles">';
                for($j = 0; $j<count($this->tableauDeCaracteristique); ++$j){
                    echo '<li>';
                        echo '<h6>'.$this->tableauDeCaracteristique[$j][0].'</h6>';

                        if($afficheAjouterChamps) echo '<input type="button" value="+" class="petiteCroix" id="'.$j.'petiteCroix"/>';

                        // texte affiché
                        echo '<p id="'.$j.'texte">'.$this->tableauDeCaracteristique[$j][1].'</p>';
                        // zone de saisie pour le texte
                        echo '<textarea id="'.$j.'textArea" style="display: none"> </textarea>';
                        echo  '<div id="'.$j.'buttonValider" class ="buttonValider" style="display: none">'.$valider.' </div>';
                        echo  '<div id="'.$j.'buttonAnnuler" style="display: none">'.$annuler.' </div>';
                    echo '</li>';
                }
            echo '</ul>';


            // pour ajouter un champ
            if($afficheAjouterChamps){
                echo '<div> <p id="ajouterUnChamp">'.$ajouterChamp.'</p> </div>';
            }


        echo '</article>';
    }
} 