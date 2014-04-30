
var map;
var lat = 1;
var long = 0;

var listeRestaurantJSON = {
"restau0" : [
    "Chez J\'aime ",
    "http://localhost/Meittopi/image/profil_vide.png",
    "4.5",
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
    0
],
    "restau1" : [
        "Chez J\'aime  dhdf",
        "http://localhost/Meittopi/image/profil_vide.png",
        "4.5",
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
        5,
        1
    ]

};



function initialize() {
    var myLatlng = new google.maps.LatLng(lat,long);
    var mapOptions = {
        zoom: 4,
        center: myLatlng
    };

    map = new google.maps.Map(document.getElementById('carte'), mapOptions);

    for(node in listeRestaurantJSON){

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(listeRestaurantJSON[node][15],listeRestaurantJSON[node][16]),
            map: map
        });
        marker.set("id", node);

        google.maps.event.addListener(marker, 'click', function() {

            var infoBulle = '<div class="infoBulle">';

            var contenant = '<img src=" ' + listeRestaurantJSON[this.get("id")][1] +' ">';
            
            contenant += '<section>'; // a droite de la photo

	            contenant += '<article>'; // tire restau
		            contenant += '<p>'+ (parseInt(this.get("id")[6]) + 1) + '. </p>'; //TODO: bien garder ici la former restau1
		            contenant += '<h4>'+listeRestaurantJSON[this.get("id")][0]+' </h4>';
	            contenant += '</article>';
	            
	            contenant += '<div>'; // etoile et nobre d'avis
		            contenant += '<div>'; // note
					// note restau
		            for(var i = 0; i<listeRestaurantJSON[this.get("id")][2]; ++i){
		                contenant += '<canvas width="19" height="19"></canvas>';
		            }
		            contenant += '</div>';
		            contenant += '<p>'+ listeRestaurantJSON[this.get("id")][4] + ' avis</p>'; //TODO: francais
	            contenant += '</div>';
	            
	            var prix = ''; // prix
	            for(var i = 0; i<listeRestaurantJSON[this.get("id")][3]; ++i){
	               prix += '$';
	            }
	            contenant += '<section>' + prix + '</section>';
		       
	            
	            contenant += '<aside>'; // coordonné restau
		            contenant += '<p>'+ listeRestaurantJSON[this.get("id")][6] +'</p>';
		            contenant += '<adress>'+ listeRestaurantJSON[this.get("id")][7] +'<br/>'+
											 listeRestaurantJSON[this.get("id")][8] +'<br/>'+
											 listeRestaurantJSON[this.get("id")][9] +'</adress>';
	            contenant += '</aside>';
	            
            contenant += '</section>';

            infoBulle += contenant;
            infoBulle += '</div>';

            document.getElementById('infoBulle').innerHTML = infoBulle;
        });

    }



}

