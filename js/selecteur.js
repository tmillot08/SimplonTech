var nomFichier = document.documentURI.split("/")[document.documentURI.split("/").length - 1];
var target = document.getElementsByClassName('selectNav');
var indextarget;

switch (nomFichier) {
  case "accueil.html":
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
  case "support.html":
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
