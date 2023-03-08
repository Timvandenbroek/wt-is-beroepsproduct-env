<?php
session_start();
databaseActies('sturen');
if (!wachtwoordCheck()) {
    $_SESSION['error'] = 'inlog';
    header("location: ../fletnix/isingelogd.php");
    exit();
}
header("location: ../fletnix/index.php");
exit();


function databaseActies($opdracht)
{
    require '../db_connectie.php';
    require '../functies/beveiliging_gegevens.php';
    $emailCheck = "SELECT COUNT(customer_mail_address) as mail FROM Customer WHERE customer_mail_address = ?";
    $gecheckteQuery = $verbinding->prepare($emailCheck);
    $gecheckteQuery->execute([htmlspecialchars($_POST['email'])]);
    $resultaat = $gecheckteQuery->fetch();
    $mailRecords = intval($resultaat['mail']);
    if (!isset($dBInfoVerstuurd) && wachtwoordCheck() && $mailRecords === 0 && $opdracht === 'sturen' && emailcheck(trim(htmlspecialchars($_POST['email'])))) {
        $sql = "INSERT INTO Customer (customer_mail_address, lastname, firstname, payment_method, payment_card_number, contract_type, subscription_start, user_name, password, country_name) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $inputQuery = $verbinding->prepare($sql);
        $inputQuery->execute(
            [
                versleutel(trim(htmlspecialchars($_POST['email']))), versleutel(trim(htmlspecialchars($_POST['firstname']))), versleutel(trim(htmlspecialchars($_POST['lastname']))), 'CreditCard',
                versleutel(trim(htmlspecialchars($_POST['ccn']))), trim(htmlspecialchars($_POST['abonnement'])), date("d/m/Y"), versleutel(trim(htmlspecialchars($_POST['username']))),
                password_hash(trim(htmlspecialchars($_POST['password'])), PASSWORD_DEFAULT), 'Netherlands'
            ]
        );
        $_SESSION['mailadres'] = $_POST['email'];
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['abonnement'] = $_POST['abonnement'];
        $dBInfoVerstuurd = true;
    } else {
        header("location: ../fletnix/index.php?fout=account");
        exit();
    }
    $verbinding->close;
}

function emailcheck($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function wachtwoordCheck()
{
    return $_POST['password'] === $_POST['password2'];
}
?>