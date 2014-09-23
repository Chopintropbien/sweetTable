<?php

function recommends_restaurant($center, $distance, $tags, $cuisine, $maxPrice, $minPrice){
    return json_decode(file_get_contents('http://localhost:5000/recommend/restaurant?center='.$center
        .'&distance='. $distance
        .'&tags='. $tags
        .'&cuisine='. $cuisine
        .'&maxPrice='. $maxPrice
        .'&minPrice='. $minPrice));

}


