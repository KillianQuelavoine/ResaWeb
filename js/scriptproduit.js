document.addEventListener("DOMContentLoaded", function () {
    const image = document.querySelectorAll('.tout');
    image.forEach(element => {
        element.addEventListener('click', () => {
            var lienimg = element.getAttribute('style');
            var lienimg = lienimg.substring(17,56);
            console.log(lienimg);
            var imgfull = document.querySelector('.img-produit-active');
            imgfull.style.backgroundImage = lienimg;

        });
    });
});