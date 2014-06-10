
(function() {

    var lieuRecherche = document.getElementById('ou');

    addEvent(lieuRecherche, 'keyup', function(e){
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost/meittopi/controleur/navigateur/lieu/lieu.php');
        xhr.send('lieu=' + this.value);

        xhr.onreadystatechange = function() { // On gère ici une requête asynchrone

            if (xhr.readyState == 4 && xhr.status == 200) { // Si le fichier est chargé sans erreur
                alert(xhr.responseText);
            }
        };

        xhr.send(null);

    });




})();
