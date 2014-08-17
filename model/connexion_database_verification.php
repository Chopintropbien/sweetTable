<?php

function connexion_database_verification(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=t8wm9R7dP', 'root', 'Goonpourl1fo');
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}