
// All Projects page

let i = 0;
function nextSlide() {
  let bbz1 = document.querySelector('.pvz');
  let slides = bbz1.getElementsByClassName('test');
  slides[i].classList.remove('active');
  i = (i+1) % slides.length;
  slides[i].classList.add('active');
}
function prevSlide() {
  let bbz1 = document.querySelector('.pvz');
  let slides = bbz1.getElementsByClassName('test');
  slides[i].classList.remove('active');
  i = (i-1 +slides.length) % slides.length;
  slides[i].classList.add('active');
}
// Menu button animation 

const menuBtn = document.querySelector('.menu-btn'); 
const links = document.querySelector('.links'); 
const navbar = document.querySelector('.navbar')
let menuState = false;
menuBtn.addEventListener('click', () => {
  links.classList.toggle('links-in');
  navbar.classList.toggle('black-navbar');
  if(!menuState) {
    menuBtn.classList.add('open');
    menuState = true;

  }
  else {
    menuBtn.classList.remove('open');
    
    menuState = false;
  }
})

// Get the modal
var modal = document.getElementById("pp");

// Get the button that opens the modal
var btn = document.getElementById("ppBtn");
var btn2 = document.getElementById("ppBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}