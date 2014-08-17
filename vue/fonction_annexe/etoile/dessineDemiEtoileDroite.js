

// le canvas doit etre un rectangle de longeur l et des largeur 2*l. La largeur doit etre dans horizontal
function dessineDemiEtoileDroite(canvas, longeur, couleur){
    var context = canvas.getContext('2d');

    var largeur = longeur / 2;

    // creer le contour de l'étoile
    context.strokeStyle = "black";
    context.lineWidth = 1;
    context.fillStyle = "white";
    context.beginPath();
    context.moveTo(0.5 * longeur - largeur, 0.6826 * longeur);
    context.lineTo(0.8043 * longeur -largeur, 0.9 * longeur);
    context.lineTo(0.6739 * longeur -largeur, 0.5522 * longeur);
    context.lineTo(0.9783 * longeur -largeur, 0.3478 * longeur);
    context.lineTo(0.6087 * longeur -largeur, 0.3478 * longeur);
    context.lineTo(0.5 * longeur -largeur, 0);
    context.closePath();
    context.stroke();
    context.fill();


// moitier droite de l'étoite qui va être colorier
    context.strokeStyle = "transparent";
    context.fillStyle = couleur;
    context.beginPath();
    context.moveTo(0.5 * longeur -largeur, 0.6826 * longeur);
    context.lineTo(0.8043 * longeur -largeur, 0.9 * longeur);
    context.lineTo(0.6739 * longeur -largeur, 0.5522 * longeur);
    context.lineTo(0.9783 * longeur -largeur, 0.3478 * longeur);
    context.lineTo(0.6087 * longeur -largeur, 0.3478 * longeur);
    context.lineTo(0.5 * longeur -largeur, 0);
    context.closePath();
    context.stroke();
    context.fill();

}