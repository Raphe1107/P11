document.addEventListener("DOMContentLoaded", function() {
  const lightbox = document.getElementById("lightbox");
  const lightboxImage = document.getElementById("lightboximage");
  const lightboxClose = document.querySelector(".lightbox-close");
  const lightboxRefElement = document.querySelector(".lightbox-ref");
  const lightboxCatElement = document.querySelector(".lightbox-cate");

  const fullscreenElements = document.querySelectorAll(".fullscreen");

  fullscreenElements.forEach(element => {
    element.addEventListener("click", function(event) {
      event.preventDefault();

      // Récupérer les informations de l'élément .fullscreen cliqué
      const imageSrc = element.getAttribute("data-image");
      const imageRef = element.getAttribute("data-ref");
      const imageCat = element.getAttribute("data-cate");

      // Mettre à jour la lightbox avec les informations
      lightboxImage.src = imageSrc;
      lightboxRefElement.textContent = imageRef;
      lightboxCatElement.textContent = imageCat;

      // Afficher la lightbox
      lightbox.style.display = "block";
    });
  });

  lightboxClose.addEventListener("click", function() {
    // Fermer la lightbox lorsqu'on clique sur le bouton de fermeture
    lightbox.style.display = "none";
  });
});
