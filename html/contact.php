<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body class="bg">
    <header>
        <?php include 'header.html'?>
    </header>

    <div class="maincon">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1822.2214125532798!2d4.721833026858348!3d49.76706443812701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f972394b33a06f%3A0xabefa42e8416115d!2sChambre+De+Commerce+Et+D&#39;Industrie+Des+Ardennes!5e0!3m2!1sfr!2sfr!4v1528123329443"
            width="49%" height="70%" frameborder="0" style="border:0"></iframe>
        <div class="conbox">
            <p class="pcon"><i class="fas fa-address-card ico"></i>  <span class="bold">Adresse :</span> 18 A Avenue Georges Corneau, 08000 Charleville-Mézières</p>
            <p class="pcon"><i class="fas fa-clock ico"></i>  <span class="bold">Horaires d'ouvertures :</span></p>
                <br><div class="border"></p>Lundi : 9h00-18h00</p>
                </p>Mardi : 9h00-18h00</p>
                </p>Mercredi : 9h00-18h00</p>
                </p>Jeudi : 9h00-18h00</p>
                </p>Vendredi : 9h00-18h00</p></div><br>
                <br><br>
                <?php
		 					if (date('w') == 0 || date('w') == 6){
		 						echo ('<p class="fer"> Le magasin est fermé</p>');}
							elseif (date('H') < 9 || date('H') >= 18){
								echo ('<p class="fer"> Le magasin est fermé.</p>');
							} else {
								echo ('<p class="ouv"> Le magasin est ouvert.</p>');
							}
						?><br><br>
            <p class="pcon"><i class="fas fa-phone ico"></i>  <span class="bold">Téléphone :</span> 03-01-02-04-05</p>
            <p class="pcon"><i class="fas fa-envelope-open ico"></i>  <span class="bold">Mail :</span> test.test@test.fr</p>
        </div>
    </div>
    </mains>
    <footer>
        <?php include 'footer.html'?>
    </footer>
</body>
<script type="text/javascript" src="../js/selecteur.js"></script>
</html>