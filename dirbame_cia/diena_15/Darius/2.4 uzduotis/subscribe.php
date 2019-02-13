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
print_r($_GET);

$pastas = $_GET['email'];


if(($_GET['email']) =="") {
    echo "tuscias" . "<br />";
}else{
    echo "yra reiksme" . $_GET['email'] . "<br />";
}



include("db_functions.php");

$nr=4;

$gydytojas = getDoctor($nr);

echo "<p>" . $gydytojas["name"] . "</p>";



for ($i=1; $i < 5 ; $i++) { 
    $gydytojas = getDoctor($i);
    // echo "<li>" . $gydytojas["name"] . "</li>";

echo "<li><a href='doctor.php?kintamasis=$i'>"
. $gydytojas["name"] . "</a></li>";
}
?>



</body>
</html>


