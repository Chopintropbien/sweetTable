
var map;
var lat = 1;
var long = 0;

var listeRestaurantJSON = {
    "0" : [
        "Chez J\'aime ",
        "http://localhost/Meittopi/image/profil_vide.png",
        "1",
        "3",
        "100",
        ["Italien", "Pizza"],
        "Malley",
        "Chemin de Malley 12",
        "1007 Lausanne",
        "04 50 62 29 24",
        "http://localhost/meittopi/restaurant/restaurant.php",
        [["Diamche", "tout à 13 fr sdfv s ds sfv sf df vgs ver cdfgbfgb sd bs d", ""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        6,
        2
    ],
    "1" : [
        "Chez J\'aime ",
        "http://localhost/Meittopi/image/profil_vide.png",
        "1",
        "3",
        "100",
        ["Italien", "Pizza"],
        "Malley",
        "Chemin de Malley 12",
        "1007 Lausanne",
        "04 50 62 29 24",
        "http://localhost/meittopi/restaurant/restaurant.php",
        [["Diamche", "tout à 13 fr sdfv s ds sfv sf df vgs ver cdfgbfgb sd bs d", ""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        4,
        20
    ],
    "2" : [
        "Chez J\'aime ",
        "http://localhost/Meittopi/image/profil_vide.png",
        "1",
        "3",
        "100",
        ["Italien", "Pizza"],
        "Malley",
        "Chemin de Malley 12",
        "1007 Lausanne",
        "04 50 62 29 24",
        "http://localhost/meittopi/restaurant/restaurant.php",
        [["Diamche", "tout à 13 fr sdfv s ds sfv sf df vgs ver cdfgbfgb sd bs d", ""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        [["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
        30,
        10
    ]

};



function initialize(id) {
    var myLatlng = new google.maps.LatLng(lat,long);
    var mapOptions = {
        zoom: 4,
        center: myLatlng
    };

    map = new google.maps.Map(document.getElementById(id), mapOptions);

    for(node in listeRestaurantJSON){

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(listeRestaurantJSON[node][15],listeRestaurantJSON[node][16]),
            map: map
        });
    }

}

function initialize_carte_avance(id) {
    var myLatlng = new google.maps.LatLng(lat,long);
    var mapOptions = {
        zoom: 4,
        center: myLatlng
    };

    map = new google.maps.Map(document.getElementById(id), mapOptions);

    for(node in listeRestaurantJSON){


        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(listeRestaurantJSON[node][15],listeRestaurantJSON[node][16]),
            map: map
        });
        marker.set("id", node);


        google.maps.event.addListener(marker, 'mouseout', function() {
            document.getElementById('contientCarte').style.display = 'none';
        });

        // un code assez compliqué trouvé sur internet auquel je ne comprends rien.... (qu'a 99.9%, mais je n'aurias jamais les 0.01% d'idee)
        var Demo = {
            overlay:null,
            map:null,
            xy: null,

            //callback for route request to DirectionsService
            showDirections: function() {
                google.maps.event.addListener(marker, 'click', function(){
                    //set up overlay
                    Demo.overlay = new google.maps.OverlayView();
                    Demo.overlay.draw = function() {
                        if(Demo.xy){
                            var bullInfo = document.getElementById('contientCarte'); //TODO
                            bullInfo.style.display = 'block';
                            bullInfo.style.position = 'absolute';
                            bullInfo.style.top =  Demo.xy.y + 'px';
                            bullInfo.style.left = Demo.xy.x + 'px';
                        }

                    };
                    Demo.overlay.setMap(Demo.map);

                    //add listener to get x y once map is drawn

                    var proj = Demo.overlay.getProjection();
                    var pos = this.getPosition();
                    Demo.xy = proj.fromLatLngToContainerPixel(pos);


                });
            }
        }

        Demo.map = map;
        Demo.showDirections();

    }

}









/*
*

 //TODO
 var contentString = '<article class="restaurant_basic">' +
 '<article>' + // tire restau
 '<p>' + i+' </p>' +
 '<a href="restaurant.php?uid='+ 'uid_restau' +'"><h4>'+ 'nom_restau' +'</h4></a>' +
 '</article>' +

 '<div>' + // etoile et nobre d'avis
 '<div>' + // note
 //canvas_etoile(listeRestaurantJSON[this.get("id")][2], 19, id) +
 '</div>' +
 '<p>'+ 3 +' avis</p>' + // TODO
 '</div>' +

 '<section>' + // prix et cathegorie
 '<div>' + prix + '</div>' + // pris
 '<p>'+ cathegorie +'</p>' +
 '</section>' +

 '</article>';


 // prix du restaurant
 var prix = '';
 for(var i = 0; i < 3; ++i) prix += '$'; //TODO

 // quategorie du restaurant
 var cathegorie = 'Italien'; //TODO

 /* // categorie
 include('vue/search/option/francais/array_name.php');
 $nbCathegorie = count($this->liste_cathegorie);
 $cathegorie = '';
 for($j=0; $j<$nbCathegorie; ++$j){
 $cathegorie = $cathegorie . $cuisines_name[$this->liste_cathegorie[$j]];
 if(!($j == $nbCathegorie-1)){ $cathegorie = $cathegorie . ', '; }
 }*/







