<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/30/14
 * Time: 7:56 AM
 */

class RevueAValider {
    private $restaurant;

    public function __construct($restaurant){
        $this->restaurant = $restaurant;

    }

    public function affiche($i){
        include('../vue/class/revue/francais/revueAValider.php');
        include('vue/class/revue/francais/revueAValider.php');
        echo '<article class="restaurant">';
            $this->restaurant->affiche($i);
        echo '</article>';

        echo '<section>';
            echo '<img src="http://localhost/Meittopi/image/warning.png"/>';
            echo '<p>'.$commPasValider.'</p>';
            echo '<div><input type="button" value="'.$editer.'"/></div>';
        echo '</section>';
    }
} 