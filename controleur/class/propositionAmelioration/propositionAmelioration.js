
function votePourOuContre(){

    var photoPouceHautVert = 'http://localhost/Meittopi/image/pouce/pouceHautVert.png';
    var photoPouceHautBlanc = 'http://localhost/Meittopi/image/pouce/pouceHautBlanc.png';

    var photoPouceBasRouge = 'http://localhost/Meittopi/image/pouce/pouceBasRouge.png';
    var photoPouceBasBlanc = 'http://localhost/Meittopi/image/pouce/pouceBasBlanc.png';


    // pour le pouce du haut
    var poucesHaut = document.getElementsByClassName('pouceHaut');

    for(var i = 0; i < poucesHaut.length; ++i){
        addEvent(poucesHaut[i], 'click', function(){
            var pouceBas = document.getElementById(this.id[0] + 'pouceBas');
            if(this.src == photoPouceHautBlanc){
                if(pouceBas.src == photoPouceBasRouge){
                    pouceBas.src = photoPouceBasBlanc;
                }
                this.src = photoPouceHautVert;
            }
            else if(this.src == photoPouceHautVert) this.src = photoPouceHautBlanc;
        });
    }

    // pour le pouce du bas
    var poucesBas = document.getElementsByClassName('pouceBas');
    for(var i = 0; i < poucesBas.length; ++i){
        addEvent(poucesBas[i], 'click', function(){
            var pouceHaut = document.getElementById(this.id[0] + 'pouceHaut');

            if(this.src == photoPouceBasBlanc){
                if(pouceHaut.src == photoPouceHautVert){
                    pouceHaut.src = photoPouceHautBlanc;
                }
                this.src = photoPouceBasRouge;
            }
            else if(this.src == photoPouceBasRouge) this.src = photoPouceBasBlanc;
        });
    }

}