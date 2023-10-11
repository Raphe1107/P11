/* ---------- Contact ---------- */

var modal = document.getElementById("contact");
var btncontact = document.getElementById("Btncontact");
var closecontact = document.querySelector(".close");

btncontact.onclick = function() {
    modal.style.display = "block";
}

// Quand l'utilisateur clique sur la croix (span), la modale se ferme
closecontact.onclick = function() {
    modal.style.display = "none";
}
  
// Quand l'utilisateur clique en dehors de la modale, la modale se ferme
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}

/* ---------- Button Contact ---------- */

var modal = document.getElementById("contact");
var btncontact = document.getElementById("Buttoncontact");
var closecontact = document.querySelector(".close");

btncontact.onclick = function() {
    modal.style.display = "block";
}

// Quand l'utilisateur clique sur la croix (span), la modale se ferme
closecontact.onclick = function() {
    modal.style.display = "none";
}
  
// Quand l'utilisateur clique en dehors de la modale, la modale se ferme
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}