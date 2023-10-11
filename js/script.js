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



/* ---------- Pré remplissage formulaire ---------- */

jQuery(document).ready(function() {
    var ref =  "<?php echo get_post_meta(get_the_ID(), 'reference', true); ?>";
    $("#reference").val(ref);
});

console.log(reference);

