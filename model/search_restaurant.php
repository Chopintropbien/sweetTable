<?php


function search_restaurant($load, $center, $distance, $tags, $cuisine,$minPrice, $maxPrice){
    return json_decode(file_get_contents('http://localhost:5000/search/restaurant?load='.$load
        .'&center='.$center
        .'&distance='. $distance
        .'&tags='. $tags
        .'&cuisine='. $cuisine
        .'&maxPrice='. $maxPrice
        .'&minPrice='. $minPrice));
}





