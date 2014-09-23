<?php


function search_location($query){
    return json_decode(file_get_contents('http://localhost:5000/search/location?query='.$query));
}