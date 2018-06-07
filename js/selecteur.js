var nomFichier = document.documentURI.split("/")[document.documentURI.split("/").length - 1];
var target = document.getElementsByClassName('selectNav');
var indextarget;

switch (nomFichier) {
  case "accueil.php":
    indextarget = 0;
    break;
  case "logiciel.php":
    indextarget = 1;
    break;
  case "hardware.php":
    indextarget = 1;
    break;
  case "presentation.php":
    indextarget = 2;
    break;
  case "support.php":
    indextarget = 3;
    break;
  case "contact.php":
    indextarget = 4;
    break;
  default:
    indextarget = 0;
}

current = target[indextarget];
current.setAttribute("class",current.getAttribute('class') + " test");



window.onscroll = function() {myFunction()};

var header = document.getElementById("navfix");

var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
};
