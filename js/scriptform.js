document.addEventListener("DOMContentLoaded", function() {
    var prixbase = document.querySelector('#prix').innerHTML;
    var date1 = document.querySelector('#date1').value;
    var date2 = document.querySelector('#date2').value;
    var datedeb = Date.parse(date1);
    var datefin = Date.parse(date2);
    var temps = datefin - datedeb;
    var temps = temps / (60 * 60 * 24 * 1000);
    var temps = temps - 1;
    var prixmodif = prixbase * temps;
    var prixmodif = document.querySelector('#prix').innerHTML = prixmodif;
    var inputdate = document.querySelectorAll('input[type=date]');
    inputdate.forEach(element => {
        element.addEventListener('change', (event) => {
            var date1 = document.querySelector('#date1').value;
            var date2 = document.querySelector('#date2').value;
            var datedeb = Date.parse(date1);
            var datefin = Date.parse(date2);
            var temps = datefin - datedeb;
            var temps = temps / (60 * 60 * 24 * 1000);
            var prixmodif = prixbase * temps;
            var prixmodif = document.querySelector('#prix').innerHTML = prixmodif;
        });
    });


    var input = document.querySelectorAll('input');
    input.forEach(element => {
        element.addEventListener('change', (event) => {
            // Si les champs sont vides
            var envoi = false;
            var input = document.querySelectorAll('input');
            input.forEach(element => {
                if (element.value == "") {
                    envoi = true;
                }
            });
            // Si les champs sont remplis mais que le formulaire n'est pas envoyé
            if (envoi == true) {
                window.onbeforeunload = function() {
                    return "Vous n'avez pas fini de remplir votre réservation, êtes vous sûr.e de vouloir quitter ?";
                };
            }
        });
    });
    // Pour que le bouton n'ai pas l'alerte
    var reserver = document.querySelector('#reserver');
    reserver.addEventListener('click', (event) => {
        window.onbeforeunload = null;
    });
});