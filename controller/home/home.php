<?php

include ('model/home/liste_publication.php');
$liste_publication_JSON = get_liste_publication();

include ('vue/home/home.php');