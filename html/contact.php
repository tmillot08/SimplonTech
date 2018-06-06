<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
    <header>
        <!--?php include 'header.html'?-->
            <div id="ban">
                <div class="center">
                    <div class="title">Simplon Tech</div>
                </div>
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="#" class="fa fa-home fa-3x selectNav" id="left"></a>
                    </li>
                    <li class="prod">
                        <a href="#" class=" selectNav">Nos Produits</a>
                        <div class="deroule" id="left">
                            <a href="#"> Hardware</a>
                            <a href="#">Software</a>
                        </div>
                    </li>
                    <li> <a href="#" class="selectNav">Qui somme nous ?</a></li>
                    <li> <a href="#" class="selectNav"> Support</a> </li>
                    <li> <a href="#" class="selectNav active">Contact</a></li>
                </ul>
            </nav>


        <script type="text/javascript" src="../js/selecteur.js"></script>
    </header>

    <div class="maincon">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1822.2214125532798!2d4.721833026858348!3d49.76706443812701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f972394b33a06f%3A0xabefa42e8416115d!2sChambre+De+Commerce+Et+D&#39;Industrie+Des+Ardennes!5e0!3m2!1sfr!2sfr!4v1528123329443"
            width="50%" height="70%" frameborder="0" style="border:0"></iframe>
        <div class="conbox">
            <p class="pcon"><i class="fas fa-address-card ico"></i>  <span class="bold">Adresse :</span> 18 A Avenue Georges Corneau, 08000 Charleville-Mézières</p>
            <p class="pcon"><i class="fas fa-clock ico"></i>  <span class="bold">Horaires d'ouvertures :</span>
                <?php
		 					if (date('w') == 0 || date('w') == 6){
		 						echo ('<span class="fer"> Le magasin est fermé</span>');}
							elseif (date('H') < 9 || date('H') >= 18){
								echo ('<span class="fer"> Le magasin est fermé.</span>');
							} else {
								echo ('<span class="ouv"> Le magasin est ouvert.</span>');
							}
						?>
                <br><br> Lundi : 9h00-18h00<br> Mardi : 9h00-18h00<br> Mercredi : 9h00-18h00<br> Jeudi : 9h00-18h00<br> Vendredi : 9h00-18h00<br></p>
            <p class="pcon"><i class="fas fa-phone ico"></i>  <span class="bold">Téléphone :</span> 03-01-02-04-05</p>
            <p class="pcon"><i class="fas fa-envelope-open ico"></i>  <span class="bold">Mail :</span> test.test@test.fr</p>
        </div>
    </div>
    </mains>
    <footer>
        <!--?php include 'footer.html'?-->
        <div class="navLogo">
            <div class="navFooter">
                <ul>
                    <p>Sommaire:</p>
                    <a href="">
                        <li>Accueil</li>
                    </a>
                    <a href="">
                        <li>Nos produit</li>
                    </a>
                    <a href="">
                        <li>Support</li>
                    </a>
                    <a href="">
                        <li>Qui somme nous</li>
                    </a>
                    <a href="">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
            <div class="logotech">
                <p>Simpl<span class="fas fa-cog fa-spin"></span>n</p>
                <p>Tech</p>
            </div>
            <div class="groupeLogo">
                <span class="logo fab fa-facebook-square fa-5x"></span>
                <span class="logo fab fa-twitter-square fa-5x"></span>
                <span class="logo fab fa-youtube-square fa-5x"></span>
            </div>
        </div>
        <p id="copyright">©Simplon Tech</p>
    </footer>
</body>

</html>