(function(){

    /* click on the canvas */
    var slide_button = document.getElementsByClassName('slide_button');
    for(var i = 0; slide_button.length; ++i){
        slide_button[i].onclick = function(){
            var couleur_canvas = '#FFB15D';
            var num_button = this.id[0];

            /* decolorie les precedent button */
            var div_button = document.getElementById('div_button_slide');
            var num_prec_button = div_button.className;
            document.getElementById(num_prec_button + 'slide_button').style.backgroundColor = '';

            /* className stock le numero du button qui etais colorier (donc la photo)*/
            div_button.className = num_button;

            /* change de photo a afficher */
            document.getElementById(num_prec_button + 'slide').style.display = 'none';
            document.getElementById(num_button + 'slide').style.display = 'inline-block';

            this.style.backgroundColor = couleur_canvas;
        }
    }

})();