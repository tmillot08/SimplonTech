<!DOCTYPE html>
<html style="font-size: 62.5%;">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/accueil.css">
  </head>
  <body>
    <header>
      <?php include ('../html/header.html') ?>
    </header>

    <main class="accueil">
    <div class="container-fluid c">
    <div id="carousel" class="carousel slide" data-ride="carousel" style="width:980px;">
      <ul class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ul>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/promo.png" alt="Chicago" style="width:100%;"  >

        </div>

        <div class="carousel-item">
          <img src="../img/promo2.png" alt="Promo2" style="width:100%;"  >
        </div>

        <div class="carousel-item">
          <img src="../img/promo3.png" alt="New york" style="width:100%;" >
        </div>
    </div>



      </div>


    </div>
    <div class="container-fluid center" style="width:980px;">
      <div class="row " style="margin-top: 20px;">
        <div class="col-lg-3 text-center align-items-center">
          <i class="fas fa-laptop fa-2x circle"></i>
          <p>service garantit</p>
        </div>
        <div class="col-lg-3 text-center">
          <i class="fas fa-question fa-2x circle"></i>
          <p>Qui somme nous ?</p>
        </div>
        <div class="col-lg-3 text-center ">
          <i class="fas fa-phone-volume fa-2x circle"></i>
          <p>Support technique rapide et éfficace</p>
        </div>
        <div class="col-lg-3 text-center">
          <i class="fas fa-euro-sign fa-2x circle"></i>
          <p>Reparer ou rembouser</p>
        </div>
      </div>
      <div class="row">
        <div class="card-deck" style="width: 980px;">
          <div class="card">
            <img class="card-img-top" src="../img/pc.png" alt="pc" style="width: 250px;">
            <div class="card-body">
              <a href="#" class="btn btn-block"><p>Les Ordinateurs </p></a>
              <ul>
                <li>Ordinateur Gaming</li>
                <li>Ordinateur Bureautique</li>
                <li>Ordinateur Portable</li>
                <li>PC sur mesure</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../img/compo.png" alt="composant" style="width: 250px;">
            <div class="card-body">
              <a href="#" class="btn btn-block"><p>Les composants</p></a>
              <ul >
                <li>Carte Graphique</li>
                <li>Processeur</li>
                <li>Carte mère</li>
                <li>Disque Dur</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../img/casque.png" alt="casque" style="width: 250px;" >
            <div class="card-body">
              <a href="#" class="btn btn-block"> <p>Les Périphérique</p></a>
              <ul>
                <li>Ecran</li>
                <li>Clavier</li>
                <li>Souris</li>
                <li>Casque</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="c b">
        <h1>Un grand choix de marque</h1>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <img src="../img/intel.png" alt="" style="width:200px;">
        </div>
        <div class="col-lg-3">
          <img src="../img/geforce.png" alt="" style="width:200px;">
        </div>
        <div class="col-lg-3">
          <img src="../img/cooler.png" alt="" style="width:200px;">
        </div>
        <div class="col-lg-3">
          <img src="../img/asus.png" alt="" style="width:200px;">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <img src="../img/Ryzen.png" alt="" style="width:200px;">
        </div>
        <div class="col-lg-3">
          <img src="../img/amd.png" alt="" style="width:200px;">
        </div>
        <div class="col-lg-3">
          <img src="../img/corsair.png" alt="" style="width:200px;">
        </div>
        <div class="col-lg-3">
          <img src="../img/roc.png" alt="" style="width:200px;">
        </div>
      </div>
    </div>
    </main>

    <footer>
      <?php include ('footer.html')?>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src:"../js/selecteur.js"> </script>



  </body>
</html>
