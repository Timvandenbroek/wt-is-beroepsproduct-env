<?php
  $titel = "Wildcard";
  $duurfilm = "92 minuten lang";
  $regisseurfilm = "Simon West";
  $hoofdrolspeler = "Jason Statham";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/normalise.css">
    <title> <?php echo($titel) ?> Detailpagina</title>
</head>
<body>
    <h1>
        Film <?php echo($titel) ?>
    </h1>
    <div class="nav">
        <ul>
            <li><a href="index.php">Homepagina</a></li>
            <li><a href="registratie.php">Registreren</a></li>
            <li><a href="overons.php">Over Ons</a></li>
            <li><a href="privacy.php">Privacy</a></li>
            <li><input type="text" placeholder="Zoeken.."></li>
          </ul>
    </div>
    <h2>Informatie:</h2>
    <p class="paragraaf_film">
        De film <?php echo($titel) ?> komt uit het jaar 2015 en duurt <?php echo($duurfilm) ?>. De regisseur is <?php echo($regisseurfilm) ?>. De hoofdrolspeler is <?php echo($hoofdrolspeler) ?>. <br>
        De verstokte gokker Nick Wild werkt als bodyguard. Op een dag schiet hij een vriendin te hulp die door een gangster wordt lastiggevallen.
        Dat brengt hem echter in een lastig parket met de maffia.
    </p>
    <video controls> 
        <source src="video\trailer_wildcard.mp4" type="video/mp4"/> 
    </video>
</body>
</html>