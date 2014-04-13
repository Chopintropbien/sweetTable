<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/29/14
 * Time: 10:05 AM
 */

class MaRevue {
    private $restaurant;
    private $commentaire;
    private $nbvoteUtile;
    private $nbVoteDrole;
    private $nbVoteCool;
    private $nbCompliment;
    private $datePublication;


    public function __construct($restaurant, $json){
        $this->restaurant = $restaurant;
        $this->commentaire = $json[0];
        $this->nbvoteUtile = $json[1];
        $this->nbVoteDrole = $json[2];
        $this->nbVoteCool = $json[3];
        $this->nbCompliment = $json[4];
        $this->datePublication = $json[5];

    }

    public function affiche($i){
        echo '<time>'.$this->datePublication.'</time>';
        echo '<article class="restaurant">';
            $this->restaurant->affiche($i);
        echo '</article>';

        $this->afficheCommentaireEtVote($i);
    }
    
    public function afficheCommentaireEtVote($i){
        include('../vue/class/revue/francais/revue.php');
        include('vue/class/revue/francais/revue.php');
		echo '<section>';
            echo '<ul id="listeGauche">';
                // nombre de vote util
               echo '<li>';
                    echo '<img src="http://localhost/Meittopi/image/profil/ampoule.png"/>';
                    echo '<p>'.$this->nbvoteUtile.$votesUtils.'</p>';
               echo '</li>';

                // nombre de vote drole
                echo '<li>';
                    echo '<img src="http://localhost/Meittopi/image/profil/drole.png"/>';
                    echo '<p>'.$this->nbVoteDrole.$votesdrole.'</p>';
                echo '</li>';
            echo '</ul>';
            
            echo '<ul>';	
                // nombre de vote cool
                echo '<li>';
                    echo '<img src="http://localhost/Meittopi/image/profil/cool.png"/>';
                    echo '<p>'.$this->nbVoteCool.$votesCool.'</p>';
                echo '</li>';

                // nombre de compliment
                echo '<li>';
                    echo '<img src="http://localhost/Meittopi/image/profil/olive_wreath.png"/>';
                    echo '<p>'.$this->nbCompliment.$compliment.'</p>';
                echo '</li>';
            echo '</ul>';
            
            
        echo '</section>';

        echo '<div>';
            echo '<h4>'.$votreCommentaire.'</h4>';
            echo '<p>'.$this->commentaire.'</p>';
            echo '<div>'. $modifiercommentaire.'</div>';
        echo '</div>';

	}

} 