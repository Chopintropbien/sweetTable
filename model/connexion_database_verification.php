<?php

function connexion_database_verification(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=t8wm9R7dP', 'root', '1Arid89Jheieatmanfe!cif');
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}

connexion_database_verification();