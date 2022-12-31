<?php

require_once '../db_connectie.php';
//Verbinding met database
$db = maakVerbinding();

//haal contracten op en tel het aantal contracten in de database
$query = 'select * 
        from contract
        order by price_per_month';

$data = $db->query($query);

$contract_table = '<table>';
$contract_table = $contract_table . '<tr><th>Contract</th><th>Types</th><th>Korting</th></tr>';

while($rij = $data->fetch()) {
    $contract = $rij['contract_type'];
    $type = $rij['price_per_month'];
    $korting = $rij['discount_percentage'];
    $contract_table = $contract_table . "<tr><td>$contract</td><td>$type</td><td>$korting</td></tr>";
}

$contract_table = $contract_table . "</table>";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testRegistratie</title>
</head>
<body>
    <h1>Contract type's!</h1>
    <?php
    //Return de tabel met gegevens uit de database.
    echo($contract_table);

?>

</body>
</html>