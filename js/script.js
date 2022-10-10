// document.addEventListener("DOMContentLoaded", function () {
//     var photosWrapper = document.querySelector('.imgs-slider');
//     var photos = [...document.querySelectorAll('.img-slider')];
//     var photoWidth = photos[0].offsetWidth;

//     var position = 0;
//     var minPosition = 0;
//     var maxPosition = photos.length - 1;

//     function decaleGauche() {
//         position++;
//         if (position > maxPosition) {
//             retourDebut();
//         } else {
//             photosWrapper.style.left = position * -60 + "vw";
//         }
//     }

//     function retourDebut() {
//         position = minPosition;
//         photosWrapper.style.left = "0vw";
//     }

// setInterval(function () {
//     decaleGauche();
// }, 6000);

//     var btngauche = document.querySelector('.DecaleGauche');
//     btngauche.addEventListener('click', decaleGauche)

//     function retourFin() {
//         position = maxPosition;
//         photosWrapper.style.left = position * -60 + "vw";
//     }

//     function decaleDroite() {
//         position--;

//         if (position < minPosition) {
//             retourFin();
//         } else {
//             photosWrapper.style.left = position * -60 + "vw";
//         }
//     }

//     var btndroite = document.querySelector('.DecaleDroite');
//     btndroite.addEventListener('click', decaleDroite)


// });

document.addEventListener("DOMContentLoaded", function() {
    var photosWrapper = document.querySelector('.imgs-slider');
    var photos = document.querySelectorAll('.img-slider');
    var photoWidth = photos[0].offsetWidth;

    var btnDecaleGauche = document.querySelector('.DecaleGauche');
    var btnDecaleDroite = document.querySelector('.DecaleDroite');

    // position slide courante
    var position = 1;
    var minPosition = 0;
    var maxPosition = photos.length - 1;

    function decaleGauche() {
        position++;

        if (position > maxPosition) {
            retourDebut();
            setTimeout(function() {
                photosWrapper.classList.remove('no-anime'); // on remet la transition animée en place
                decaleGauche(); // on passe du clone à la slide réellement souhaitée avec l'animation
            }, 20);
        } else {
            photosWrapper.style.left = position * -60 + "vw";
        }
    }

    function decaleDroite() {
        position--;

        if (position < minPosition) {
            retourFin();
            setTimeout(function() {
                photosWrapper.classList.remove('no-anime'); // on remet la transition animée en place
                decaleDroite(); // on passe du clone à la slide réellement souhaitée avec l'animation
            }, 20);
        } else {
            photosWrapper.style.left = position * -60 + "vw";
        }
    }

    function retourDebut() {
        position = minPosition + 1;
        photosWrapper.classList.add('no-anime'); // on empèche la transition animée
        photosWrapper.style.left = position * -60 + "vw"; // on saute sur le clone
    }

    function retourFin() {
        position = maxPosition - 1;
        photosWrapper.classList.add('no-anime'); // on empèche la transition animée
        photosWrapper.style.left = position * -60 + "vw"; // on saute sur le clone
    }



    var temps = 5000;
    setInterval(function() {
        decaleGauche();
    }, temps);

    btnDecaleGauche.addEventListener('click', decaleGauche);
    btnDecaleDroite.addEventListener('click', decaleDroite);

    var btnPause = document.querySelector('.Pause');
    // btnPause.addEventListener('click', function() {
    //     if (temps == 5000) {
    //         temps = 1000000000000000;
    //     }
    //     photosWrapper.classList.add('no-anime');
    //     setInterval(function() {
    //         decaleGauche();
    //     }, temps);

    // });

    var btnPause = document.querySelector('.Pause');
    btnPause.addEventListener('click', function() {
        if (temps == 5000) {
            temps = 1000000000000000;
        }
        photosWrapper.classList.add('no-anime');
        setInterval(function() {
            decaleGauche();
        }, temps);
    });


    var btnPlay = document.querySelector('.Play');
    btnPlay.addEventListener('click', function() {
        photosWrapper.classList.remove('no-anime');
        if (temps > 5000) {
            temps = 5000;
        }
        setInterval(function() {
            decaleGauche();
        }, temps);
    });
});