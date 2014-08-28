function dessine_check(canvas, taille){
    var ctx = canvas.getContext('2d');

    ctx.strokeStyle = "black";
    ctx.fillStyle = "green";
    ctx.lineWidth = 2;

    var decalage_droite = 1;

    ctx.beginPath();
    ctx.moveTo(0 + decalage_droite, taille * 0.429);
    ctx.lineTo(taille * 0.143 + decalage_droite, taille * 0.286);
    ctx.lineTo(taille * 0.286 + decalage_droite, taille * 0.571);
    ctx.lineTo(taille * 0.571 + decalage_droite, decalage_droite);
    ctx.lineTo(taille * 0.714 + decalage_droite, taille * 0.143);
    ctx.lineTo(taille * 0.286 + decalage_droite, taille - decalage_droite);
    ctx.closePath();
    ctx.stroke();
    ctx.fill();


}