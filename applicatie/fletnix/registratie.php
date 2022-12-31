<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/normalise.css">
    <title>Registreren Fletnix!</title>
    
</head>


<body>
        
        <h1 class="titelregistratiepagina">
                Registratie pagina Fletnix
        </h1> <br>
        <div class="nav">
            <ul>
                <li><a href="index.php">Homepagina</a></li>
                <li><a href="registratie.php">Registreren</a></li>
                <li><a href="overons.php">Over Ons</a></li>
                <li><a href="privacy.php">Privacy</a></li>
                <li><a href="login.php">Login</a></li>
                <li><input type="text" placeholder="Zoeken.."></li>
              </ul>
        </div>
            
        
        <h2 class="registratie_info">
            Op deze pagina heeft u de mogelijkheid om zich te registreren voor de website Fletnix!
        </h2>
            <p class="registratie_info">U heeft de keuze uit drie verschillende abonnementen. <br> Abonnement 1 is een maandelijkse bijdrage van 8 euro per maand.
            Bij abonnement 1 kunt u maximaal maar op 1 apparaat een film/serie bekijken. <br>
            Abonnement 2 is een maandelijkse bijdrage van 10 euro per maand. Bij abonnement 2 kunt u met de beste kwaliteit een film bekijken! (op 1 apparaat) <br>
            Abonnement 3 is een maandelijkse bijdrage van 15 euro per maand. Bij abonnement 3 kunt u film(s) bekijken in de beste kwaliteit en om 1 of meerdere apparaten. <br>
            Hieronder staat het formulier voor het aanmaken van een account en het selecteren van een abonnement. </p>
       
         <br>

        <form method="get" action="login.html">
            <label for="voornaam">Voornaam:</label> <br>
            <input type="text" name="voornaam" id="voornaam" required> <br>
            <label for="achternaam">Achternaam:</label> <br>
            <input type="text" name="achternaam" id="achternaam" required> <br>
            <label for="gebruikersnaam">Gebruikersnaam:</label> <br>
            <input type="text" name="gebruikersnaam" id="gebruikersnaam" required> <br>
            <label for="email">Emailadres:</label> <br>
            <input type="email" name="email" id="email" required> <br>
            <label for="geboortedatum">Geboortedatum:</label> <br>
            <input type="date" id="geboortedatum" required> <br>
            <label for="woonplaats">Woonplaats:</label> <br>
            <input type="text" name="woonplaats" id="woonplaats" required> <br>
            <label for="rekeningnummer">Rekeningnummer:</label> <br>
            <input type="text" name="rekeningnummer" id="rekeningnummer" required> <br>
            <label for="land">Land:</label> <br>
            <input type="text" name="land" id="land" required> <br>
            <label for="wachtwoord">Wachtwoord:</label> <br>
            <input type="password" name="wachtwoord:" id="wachtwoord" required> <br>
            <label for="wachtwoordbevestiging">Bevestiging wachtwoord:</label> <br>
            <input type="password" name="wachtwoordbevestiging" id="wachtwoordbevestiging" required> <br>
            <input type="checkbox" name="abonnementen" id="abonnementen" value="html">
            <label for="abonnement1">Abonnement 1</label> <br>
            <input type="checkbox" id="abonnement1" value="html">
            <label for="abonnement2">Abonnement 2</label> <br>
            <input type="checkbox" id="abonnement2" value="html">
            <label for="abonnement3">Abonnement 3</label> <br>
            <input type="checkbox" id="abonnement3" value="html">
            <label for="opmerkingen">Opmerkingen:</label> <br>
            <textarea name="opmerkingen" cols="30" rows="10"></textarea> <br>
            <input type="submit" id="opmerkingen" name="verzenden" value="Verzenden">   
        </form>
       
        
    
</body>



</html>