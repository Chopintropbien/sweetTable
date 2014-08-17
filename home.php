<?php
session_start();
include('controller/config.php');

include('model/connexion/hash_password_verification.php');
include('model/connexion/generate_random_ints.php');
include('model/connexion/generate_salage.php');


include('controller/connexion/connexion_automatique.php');

