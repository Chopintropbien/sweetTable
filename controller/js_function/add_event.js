
function addEvent (element, event, func) { // Une fonction pour gérer les événements sous tous les navigateurs
    if (element.attachEvent) {
        element.attachEvent('on' + event, func);
    } else {
        element.addEventListener(event, func, true);
    }
}