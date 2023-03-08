<?php
session_start();
if (emailCheck(trim(htmlspecialchars($_POST['email'])))) {
    require '../functies/beveiliging_gegevens.php';
    if (inloggen(trim(htmlspecialchars(versleutel($_POST['email']))), trim(htmlspecialchars($_POST['password'])))) {
        $_SESSION['user'] = openMaken($resultaat['user_name']);
        echo openMaken($resultaat['user_name']);
        $resultaat = array();
        header("location: ../fletnix/index.php");
        exit();
    } else {
        header("location: ../functies/error.php?fout=inlog");
        exit();
    }
} else {
    header("location: ../functies/error.php?fout=inlog");
    exit();
}
function inloggen($email, $wachtwoord)
{
    require '../fletnix/db_connectie.php';
    global $resultaat;
    $sql = "SELECT customer_mail_address, contract_type, user_name, password FROM Customer WHERE customer_mail_address=?";
    $naamquery = $verbinding->prepare($sql);
    $naamquery->execute([$email]);
    $resultaat = $naamquery->fetch();
    return password_verify($wachtwoord, $resultaat['password']);
}

function emailCheck($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>