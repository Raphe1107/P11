const button = document.querySelector('.btn-menu-burger');
const nav = document.querySelector('.burger_nav');
const drop = document.querySelector('.drop');
const container = document.querySelector('.container');
const footer = document.querySelector('#footer');


button.addEventListener('click', () => {
  nav.classList.toggle('open');
  container.classList.toggle('remove');
  footer.classList.toggle('remove');
});

drop.addEventListener('click', () => {
  nav.classList.remove('open');
  container.classList.remove('remove');
  footer.classList.remove('remove');
});

button.addEventListener('click', ()=> {
  button.classList.toggle('active');
});



/* ---------- Contact ---------- */

var modal = document.getElementById("contact");
var btncontact = document.getElementById("btnburger");
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
