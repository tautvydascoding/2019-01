<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- search Bot'ai pvz: google neskanuos musu svetaines -->
         <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <!-- !! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>

        <h1> Isijunk Inspect-console (mokomes js) </h1>

<?php
// uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
require_once("db-functions.php");
$gydytojas = getDoctor(4);
echo "<p>".  $gydytojas['name'] . $gydytojas['lname'] . "</p>";

// uzduotis 3.1: atspausdinti visas gydytoju pavardes naudojant FOR cikla,
// kaip list item "ul li"
echo "<ul>";
for ($i=1; $i < 7; $i++) {
    $gydytojas = getDoctor($i); // grazina array
    echo "<li>". $gydytojas['lname'] . "</li>";
}
echo "</ul>";
// uzduotis 3.2: patobulinti 'uzduotis3',
//     kad paspaudus ant gydytojo pavardes   atidarytu doctor.php faila
//     HINT: '<a href=""></a>' nuorodoje,
echo "<h2> Patobulinta zuduotis 3</h2>";
echo "<ul>";
for ($i=1; $i < 7; $i++) {
    $gydytojas = getDoctor($i); // grazina array
    echo "<li> <a href='doctor.php?kintamasis=$i' >  "
            . $gydytojas['lname']
            . "</a></li>";
}
echo "</ul>";

// // uzduotis 3.3:
//         doctor.php faile isvesti info apie - paspausta gydytoja:
//         vardas pavarde numeris
//
//     HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji


 ?>



        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
