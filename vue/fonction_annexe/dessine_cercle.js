
function dessine_cercle(canvas, taille){
    var ctx = canvas.getContext("2d");
    ctx.lineWidth = 1;

    var decalage_droite = 1;

    ctx.beginPath();
    ctx.arc(taille * 0.286 + decalage_droite, taille * 0.571, taille * 0.286, 0, 2*Math.PI);
    ctx.stroke();
}
