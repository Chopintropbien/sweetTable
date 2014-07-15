

/* les 2 id doivent etre les meme */
function canvas_etoile(note, tailleEtoile, id){

    var nbEtoileComplete = note - note % 1;
    var demiEtoile = note % 1 == 0.5 ? true : false;
    var couleurEtoile = '';

    if(note <= 2) couleurEtoile = 'gold';
    else if(note <= 4) couleurEtoile = 'orange';
    else couleurEtoile = 'red';

    var canvas = '';
    for(var i = 0; i < nbEtoileComplete; ++i){
        canvas += '<canvas width="'+tailleEtoile +'" height="'+tailleEtoile+'" id="'+i + id +'etoileComplete" style="color: '+couleurEtoile+';">  </canvas>';
    }
    if(demiEtoile){
        canvas += '<canvas width="' + tailleEtoile+'" height="'+tailleEtoile+'" id="'+ id +'demiEtoile" style="color: '+couleurEtoile+';"></canvas>';
    }

    return canvas;
}

function colorier_etoile(id){

    var i = 0;
    var canvas = document.getElementById(i + id + 'etoileComplete');
    while(canvas){
        dessineEtoile(canvas, canvas.width);
        ++i;
        canvas = document.getElementById(i + id + 'etoileComplete');
    }
    canvas = document.getElementById(id + 'demiEtoile');
    if(canvas) dessineDemiEtoile(canvas, canvas.width);
}
