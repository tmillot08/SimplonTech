<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/support.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
  <body>

    <header>
      <?php include("../html/header.html"); ?>
    </header>

    <main class="supportMain">
      <form action="index.html" method="post">
        <h1>Support</h1>
        <fieldset class="infoClient">
          <p>Vos Infos :</p>
          <input type="text" name="nom" placeholder="Nom" required>
          <input type="text" name="prenom" placeholder="Prenom" required>
          <input type="email" name="email" placeholder="Email : example@monMail.com" required>
        </fieldset>
        <fieldset class="infoProbleme">
          <p>Votre problème :</p>
          <select class="choixProbleme" name="choixProbleme" required>
            <option value="ralentissement ">ralentissement</option>
            <option value="surchauffe">surchauffe</option>
            <option value="allumage">allumage</option>
            <option value="autres">autres</option>
          </select>
          <textarea name="details" rows="8" cols="50"></textarea>
          <input type="text" name="ref" placeholder="Reference du produit ." required>
        </fieldset>
        <input type="submit" name="submit" value="Valider">
      </form>
    </main>

    <footer>
      <?php include("../html/footer.html"); ?>
    </footer>
    <script type="text/javascript" src="../js/selecteur.js"></script>
  </body>
</html>
