<?php
function versleutel($data)
{
    $ciphering = "AES-128-CTR";
    $options = 0;
    $encryption_iv = '1234567892563123';
    $encryption_key = "veiligesitewtis";
    $encryption = openssl_encrypt(
        $data,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );
    return $encryption;
}

function openMaken($data)
{
    $ciphering = "AES-128-CTR";
    $options = 0;
    $decryption_iv = '1234567892563123';
    $decryption_key = "veiligesitewtis";
    $decryption = openssl_decrypt(
        $data,
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );
    return $decryption;
}
?>