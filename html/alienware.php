<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/alienware.css">
    <title>Alienware</title>
  </head>
  <body>
    <header>
      <?php include('header.html') ?>
    </header>

    <main class="main_alienware">

    <div class="w-screen mt-4 container-fluid">
      <section>
        <h1>Pc de jeu alienware</h1>
        <div class="row">
          <div class="col-12 img_full"></div>
          <p class="p_full"><b>Plongez dans le jeu en profondeur.</b><br>Les ordinateurs Alienware sont conçus pour casser les barrières avec des graphiques époustouflants et une puissance incroyable.
          </p>
        </div>
      </section>

      <section>
        <div class="row row_img2">
          <div class="img-responsive col-lg-6 img_2"></div>
          <div class="img-responsive col-lg-5 img_3"></div>
        </div>
      </section>

      <section class="fiche_tech">
          <h2>Fiche technique</h2>

          <div class="col-4 container_table">
          <table class="table table-striped table-hover">
            <tr>
              <td class="col-2 p-5">Processeur</td>
              <td class="col-2 p-5">Intel® Core™ i7-3630QM (2,40 GHz)</td>
            </tr>
            <tr>
              <td class="col-2 p-5">Mémoire</td>
              <td class="col-2 p-5">12 Go</td>
            </tr>
            <tr>
              <td class="col-2 p-5">Écran</td>
              <td class="col-2 p-5">17,3" 1920 x 1080</td>
            </tr>
            <tr>
              <td class="col-2 p-5">Carte graphique</td>
              <td class="col-2 p-5">NVIDIA® GeForce™ GTX 675M</td>
            </tr>
            <tr>
              <td class="col-2 p-5">Espace disque total</td>
              <td class="col-2 p-5">750 Go</td>
            </tr>
          </table>
          </div>
      </section>

      <div class="row row_button">
        <a href="hardware.php"> <button type="button" name="button" class="btn btn-dark p-4">Retour aux produits <i class="far fa-hand-point-right"> </i></button></a>
      </div>


    </div>
  </main>
    <footer>
      <?php include("footer.html") ?>
    </footer>
    <script type="text/javascript" src="../js/selecteur.js"></script>
  </body>
</html>
