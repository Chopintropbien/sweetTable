

(function(){

    var etoiles = document.getElementsByTagName('canvas');

    for(var i = 0; etoiles.length > i; ++i){

        //colorie les contours des etoile
        if(etoiles[i].className == 'demiEtoileGauche') dessineDemiEtoileGauche(etoiles[i], 45, 'transparent');
        else if (etoiles[i].className == 'demiEtoileDroite') dessineDemiEtoileDroite(etoiles[i], 45, 'transparent');

        // quand on entre dans la canvas
        addEvent(etoiles[i], 'mouseover', function(){

            // colorer les etoile
            var i = parseInt(this.id[0]);
            color_canvas(this, i);

            // aficher le commentaire
            set_commentaire(this, i);
        });


        // quand on clique sur un canvas => la valeur est trnasferer à l input hidden
        addEvent(etoiles[i], 'click', function(){
            var note = parseInt(this.id[0]) + 1;
            if(this.className == 'demiEtoileGauche'){
                note = note - 0.5;
            }
            document.getElementById('choix_note').value = note;
        });
    }


    // quand on sort du div contenant les canvas, colorier les etoiles avec la note enregistrer dans l input hidden
    addEvent(document.getElementById('div_etoiles'), 'mouseout', function(){
        var note = parseFloat(document.getElementById('choix_note').value);

        if(note == 0){
            decolorier_tous()
        }
        else if(note % 1 == 0.5){
            var num_etoile = note - 0.5;
            var canvas = document.getElementById( num_etoile +  'demiEtoileGauche');
            color_canvas(canvas, num_etoile);
            set_commentaire(canvas, num_etoile);
        }
        else {
            var num_etoile = note - 1;
            var canvas = document.getElementById( num_etoile +  'demiEtoileDroite');
            color_canvas(canvas, num_etoile);
            set_commentaire(canvas, num_etoile);
        }
    });




    // num_etoile_canvas : si le canvas concerné appertient à la 3° etoile => passer  3 en argument
    // colorie avec la bonne couleur les etoile jusqu'au canvas concerné
    function color_canvas(canvas, num_etoile_canvas){
        var i = num_etoile_canvas;
        var couleur = get_color_etoile(i);

        // colorier les canvas jusqu'au bon
        for(var j = 0;  j<i; ++j){
            var demiEtoileGauche = document.getElementById(j + 'demiEtoileGauche');
            dessineDemiEtoileGauche(demiEtoileGauche, 45, couleur);

            var demiEtoileDroite = document.getElementById(j + 'demiEtoileDroite');
            dessineDemiEtoileDroite(demiEtoileDroite, 45, couleur);
        }

        var demiEtoileGauche = document.getElementById(i + 'demiEtoileGauche');
        dessineDemiEtoileGauche(demiEtoileGauche, 45, couleur);

        var demiEtoileDroite = document.getElementById(i + 'demiEtoileDroite');
        if(canvas.className == 'demiEtoileDroite'){
            dessineDemiEtoileDroite(demiEtoileDroite, 45, couleur);
        }
        // decolorier les autre
        else dessineDemiEtoileDroite(demiEtoileDroite, 45, 'transparent');

        for(var j = i + 1;  j<5; ++j){
            var demiEtoileGauche = document.getElementById(j + 'demiEtoileGauche');
            dessineDemiEtoileGauche(demiEtoileGauche, 45, 'transparent');

            var demiEtoileDroite = document.getElementById(j + 'demiEtoileDroite');
            dessineDemiEtoileDroite(demiEtoileDroite, 45, 'transparent');
        }

    }

    /* couleur des etoiles
     * entre 0.5 et 2 => gold
     * entre 2.5 et 4 => orange
     * entre 4.5 et 5 => red
     */

    function get_color_etoile(note){
        var couleur = 'gold';
        if( note== 2 || note == 3 ) couleur = 'orange';
        if( note == 4) couleur = 'red';

        return couleur;
    }



    function decolorier_tous(){
        // decolorer toutes les etoile
        var etoilesDroites = document.getElementsByClassName('demiEtoileDroite');
        for(var i = 0; i < etoilesDroites.length; ++i){
            dessineDemiEtoileDroite(etoilesDroites[i], 45, 'transparent');
        }

        var etoilesGauches = document.getElementsByClassName('demiEtoileGauche');
        for(var i = 0; i < etoilesGauches.length; ++i){
            dessineDemiEtoileGauche(etoilesGauches[i], 45, 'transparent');
        }

        // enlever le commentaire
        document.getElementById('commentaire').innerHTML = '';
    }

    function set_commentaire(canvas, num_etoile_canvas){

        var commentaire = document.getElementById('commentaire');
        var texte = '';
        switch (num_etoile_canvas) {
            case 0:
                if(canvas.className == 'demiEtoileGauche') texte = 'Plus jamais !';
                else if (canvas.className == 'demiEtoileDroite') texte = 'Pas bon !';
                break;

            case 1:
                if(canvas.className == 'demiEtoileGauche') texte = 'Vraiment pas terrible';
                else if (canvas.className == 'demiEtoileDroite') texte = 'Peu faire mieux';
                break;

            case 2:
                if(canvas.className == 'demiEtoileGauche') texte = 'Ni plus ni moins ...';
                else if (canvas.className == 'demiEtoileDroite') texte = 'Plutôt pas mal !';
                break;

            case 3:
                if(canvas.className == 'demiEtoileGauche') texte = 'Pas mal !';
                else if (canvas.className == 'demiEtoileDroite') texte = ' Très Bon !';
                break;

            case 4:
                if(canvas.className == 'demiEtoileGauche') texte = 'Exellent !';
                else if (canvas.className == 'demiEtoileDroite') texte = 'Vraiment incroyable !';
                break;
        }
        commentaire.innerHTML = texte;
    }

})();