document.addEventListener("DOMContentLoaded", function() {
  const lightbox = document.getElementById("lightbox");
  const lightboxImage = document.getElementById("lightboximage");
  const lightboxClose = document.querySelector(".lightbox-close");
  const lightboxRefElement = document.querySelector(".lightbox-ref");
  const lightboxCatElement = document.querySelector(".lightbox-cate");

  const fullscreenElements = document.querySelectorAll(".fullscreen");

  let currentIndex = 0;

  function afficherImage(index) {
    const element = fullscreenElements[index];
    const imageSrc = element.getAttribute("data-image");
    const imageRef = element.getAttribute("data-ref");
    const imageCat = element.getAttribute("data-cate");

    lightboxImage.src = imageSrc;
    lightboxRefElement.textContent = imageRef;
    lightboxCatElement.textContent = imageCat;

    currentIndex = index;
  }

  fullscreenElements.forEach((element, index) => {
    element.addEventListener("click", function(event) {
      event.preventDefault();
      afficherImage(index);
      lightbox.style.display = "block";
    });
  });

  lightboxClose.addEventListener("click", function() {
    lightbox.style.display = "none";
  });

  const boutonPrecedent = document.querySelector(".lightbox-previous");
  const boutonSuivant = document.querySelector(".lightbox-next");

  boutonPrecedent.addEventListener("click", function() {
    if (currentIndex > 0) {
      afficherImage(currentIndex - 1);
    }
  });

  boutonSuivant.addEventListener("click", function() {
    if (currentIndex < fullscreenElements.length - 1) {
      afficherImage(currentIndex + 1);
    }
  });
});



$(".indexphoto").on("click", ".fullscreen", function(event) {
  event.preventDefault();

  const lightbox = document.getElementById("lightbox");
  const lightboxImage = document.getElementById("lightboximage");
  const lightboxClose = document.querySelector(".lightbox-close");
  const lightboxRefElement = document.querySelector(".lightbox-ref");
  const lightboxCatElement = document.querySelector(".lightbox-cate");

  const imageSrc = $(this).data("image");
  const imageRef = $(this).data("ref");
  const imageCat = $(this).data("cate");

  lightboxImage.src = imageSrc;
  lightboxRefElement.textContent = imageRef;
  lightboxCatElement.textContent = imageCat;

  lightbox.style.display = "block";
});

// Fonction pour afficher une image
function afficherImage(index) {
  const lightbox = document.getElementById("lightbox");
  const lightboxImage = document.getElementById("lightboximage");
  const lightboxRefElement = document.querySelector(".lightbox-ref");
  const lightboxCatElement = document.querySelector(".lightbox-cate");

  const fullscreenElements = document.querySelectorAll(".fullscreen");

  const element = fullscreenElements[index];
  const imageSrc = element.getAttribute("data-image");
  const imageRef = element.getAttribute("data-ref");
  const imageCat = element.getAttribute("data-cate");

  lightboxImage.src = imageSrc;
  lightboxRefElement.textContent = imageRef;
  lightboxCatElement.textContent = imageCat;

  // Mettre à jour l'indice actuel
  currentIndex = index;

  lightbox.style.display = "block";
}

// Gestionnaire d'événement pour les éléments .fullscreen (y compris les nouveaux)
document.addEventListener("click", function(event) {
  if (event.target.classList.contains("fullscreen")) {
      event.preventDefault();
      const fullscreenElements = document.querySelectorAll(".fullscreen");
      const clickedElement = event.target;
      const index = Array.from(fullscreenElements).indexOf(clickedElement);
      afficherImage(index);
  }
});

// Gestionnaire d'événement pour la flèche "Précédente"
document.addEventListener("click", function(event) {
  if (event.target.classList.contains("lightbox-previous")) {
      if (currentIndex > 0) {
          afficherImage(currentIndex - 1);
      }
  }
});

// Gestionnaire d'événement pour la flèche "Suivante"
document.addEventListener("click", function(event) {
  if (event.target.classList.contains("lightbox-next")) {
      const fullscreenElements = document.querySelectorAll(".fullscreen");
      if (currentIndex < fullscreenElements.length - 1) {
          afficherImage(currentIndex + 1);
      }
  }
});

// Initialisez currentIndex au chargement initial de la page
let currentIndex = 0;