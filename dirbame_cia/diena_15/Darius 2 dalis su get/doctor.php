<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
require_once('db_functions.php');

// $numeris = 3;
$numeris = $_GET['nr'];
    $gydytojas = getDoctor( $numeris);
    
    // echo $gydytojas[1] .  $gydytojas[2] ;
    echo $gydytojas["name"] .  $gydytojas['lname'] ;

?>
<!-- //undefined offset 1 tokio stalciaus nera -->



</body>
</html>

