<?php
function sessieCheck()
{
    session_start();
    if (!isset($_SESSION['user'])) {
        session_destroy();
    }
}

function siteCheck($toegang)
{
    if ($toegang === 'ingelogd') {
        if (!isset($_SESSION['user'])) {
            header("location: isingelogd.php");
            exit();
        }
    } elseif ($toegang === 'uitgelogd') {
        if (isset($_SESSION['user'])) {
            header("location: index.php");
            exit();
        }
    }
}
?>