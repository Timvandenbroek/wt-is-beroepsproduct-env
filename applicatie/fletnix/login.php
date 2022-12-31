<?php
  
  require_once '../db_connectie.php'
  

   
  
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/normalise.css">
    <title>Login</title>
</head>
<body>
    <h1>Login Fletnix!</h1>
    
    <div class="nav">
        <ul>
            <li><a href="index.php">Homepagina</a></li>
            <li><a href="registratie.php">Registreren</a></li>
            <li><a href="overons.php">Over Ons</a></li>
            <li><a href="privacy.php">Privacy</a></li>
            <li><input type="text" placeholder="Zoeken.."></li>
          </ul>
    </div>
    <h2>Log hier in met uw accountgegevens:</h2>
    <form method="get" action="isingelogd.html">
        <label for="gebruikersnaam">Gebruikersnaam:</label> <br>
        <input type="text" name="gebruikersnaam" id="gebruikersnaam" required> <br>
        <label for="wachtwoord">Wachtwoord:</label> <br>
        <input type="password" name="wachtwoord:" id="wachtwoord" required> <br>
        <input type="submit" id="opmerkingen" name="inloggen" value="Inloggen"> 
    </form>
</body>
</html>