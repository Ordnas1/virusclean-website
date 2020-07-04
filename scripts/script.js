//Slideshow

let slideIndex = 0;
showSlides();

function showSlides() {
    let i
    let slides = document.getElementsByClassName("carousel__slides")
    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"
    }
    slideIndex ++
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2700);
}

// Modal Box

// let modal = document.getElementById("modalbox")
// let modalClose = document.getElementsByClassName("modal__close")[0]

// modalClose.onclick = function() {
//     modal.style.display = "none"
// }

// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none"
//     }
// }