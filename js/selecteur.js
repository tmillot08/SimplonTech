var target = document.getElementsByClassName('selectNav');
var indextarget;

switch (document.title) {
  case "Accueil":
    indextarget = 0;
    break;
  case "Nos Produits":
    indextarget = 1;
    break;
  case "Qui somme nous ?":
      indextarget = 2;
      break;
  case "Support":
    indextarget = 3;
    break;
  case "Contact":
    indextarget = 4;
    break;
  default:
    indextarget = 0;
}

current = target[indextarget];
current.setAttribute("class",current.getAttribute('class') + " test");
