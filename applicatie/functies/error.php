<?php
function errorBekijken($error)
{
    if ($error === 'inlog') {
        return '<main> <h1> Het inloggen is mislukt, probeer het later opnieuw </h1> </main>';
    } elseif ($error === 'account') {
        return '<main> <h1> Het aanmaken van het account is mislukt, waarschijnlijk is het e-mail adres al in gebruik op deze site, probeer het later opnieuw </h1> </main>';
    } else {
        return '<main> <h1>Er is een onbekende fout opgetreden, probeer u het later opnieuw</h1> </main>';
    }
}
?>