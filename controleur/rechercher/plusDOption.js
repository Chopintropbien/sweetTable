
function plusDOption(idButton, classeCache){
    var plusCuisine = document.getElementById(idButton);
    addEvent(plusCuisine, 'click', function(){
        if(this.className == '+'){
            fairedisparaitreOuDisparaire(this, classeCache, 'inline-block', '- Moins de type de cuisine', '-');
        }
        else if(this.className == '-'){
            fairedisparaitreOuDisparaire(this, classeCache, 'none', '+ Plus de type de cuisine', '+');
        }

    });

}

function fairedisparaitreOuDisparaire(objet, classeCache, display, texteARemplacer, classNameARemplacer){
    var labelCache = document.getElementsByTagName('label');
    for(var i = 0; i <labelCache.length; ++i){
        if(labelCache[i].className == classeCache){
            labelCache[i].style.display = display;
            document.getElementById(labelCache[i].getAttribute('for')).style.display = display;
        }
    }

    var brCache = document.getElementsByTagName('br');
    for(var i = 0; i <brCache.length; ++i){
        if(brCache[i].className == classeCache){
            brCache[i].style.display = display;
        }
    }

    objet.className = classNameARemplacer;
    objet.innerHTML = texteARemplacer;
}