<?php

include("../modele/restaurant/photo/photo.php");

$liste_photo_JSON = get_liste_photo();

include("../vue/restaurant/photo/photo.php");