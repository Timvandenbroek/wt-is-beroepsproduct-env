<?php
function formulier()
{
    $value1 = "Basic";
    $value2 = "Premium";
    $value3 = "Pro";

    $html = <<<EOD
    <main>
        <p>
            Graag inloggen om gebruik te maken van het filmaanbod.
        </p>
        <div class="forms">
            <form action="../persistentielaag/abonnement.php" method="post">
                <h1>Account aanmaken</h1>
                <input type="text" placeholder="Gebruikersnaam" name='username' required>
                <input type="email" placeholder="E-mail adres" name='email' required>
                <input type="text" placeholder="Voornaam" name='firstname' required>
                <input type="text" placeholder="Achternaam" name='lastname' required>
                <input type="password" placeholder="Wachtwoord" name='password' required>
                <input type="password" placeholder="Wachtwoord verifiëren" name='password2' required>
                <input type="tel" pattern="[0-9\s]{1,30}" maxlength="30" placeholder="Creditcard nummers" name='ccn'>
                <select name='abonnement' required>
                    <option value="">Kies hier uw abonnement</option>
                    <option value="Basic">4 mensen in dit abonnement</option>
                    <option value="Premium">8 mensen in dit abonnement</option>
                    <option value="Pro">16 mensen in dit abonnement</option>
                </select>
                <button type="submit">Account aanmaken</button>
                <label class="privacy"><input type="checkbox" name='privacy' required> Ik ga akkoord met het<a href="privacy.php"> privacystatement</a>.</label>
            </form>
            <form action="../persistentielaag/inloggen.php" method="post">
                <h1>Inloggen</h1>
                <input type="email" placeholder="E-mail adres" name='email' required>
                <input type="password" placeholder="Wachtwoord" name='password' required>
                <button type="submit">Login</button>
            </form>
        </div>
    </main>
    EOD;
    return $html;
}
?>