document.addEventListener("DOMContentLoaded", function () {
    var selecttitre,
        ul = document.querySelector('.menu_liste'),
        item = document.querySelectorAll('.menu_produit');

    ul.onclick = function (e) {
        var target = e.target;


        var titre = target.closest('.menu_produit_titre');

        if (!titre) return;

        if (!ul.contains(titre)) return;
        openItem(titre);
    }

    function openItem(categorie) {
        if (selecttitre) {
            fermeture(selecttitre.nextSibling);
            selecttitre.previousSibling.classList.remove('menu_produit--active');
        }

        selecttitre = categorie.nextSibling;
        selecttitre.previousSibling.classList.add('menu_produit--active');
        agrandissement(selecttitre.nextSibling);
    }

    function agrandissement(categorie) {
        var paddingBottom = 144;
        categorie.style.marginTop = 2 + 'vh';
        categorie.style.marginLeft = 2 + 'vw';
        categorie.style.paddingBottom = 25 + 'vh';
    }

    function fermeture(categorie) {
        categorie.style.maxHeight = 0;
        categorie.style.marginTop = 0;
        categorie.style.padding = 0;
    }
})