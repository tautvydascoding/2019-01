<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Registracija</h2>
<form action="naujasgydytojas.php" method="get">
<input type="text" name = "vardas" placeholder = "ivesti varda">
<input type="text" name = "pavarde" placeholder = "ivesti pavarde">
<button type="submit">Uzregistruoti</button>
</form>

<h2>Pasalinti gydytoja</h2>
<form action="trintigydytoja.php" method="get">
<input type="text" name = "numeris" placeholder = "ivesti numeri">
<button type="submit">Pasalinti</button>
</form>

<h2>Priskirti nuotrauka gydytojui</h2>
<form action="naujasgydytojas.php" method="get">
<input type="file" name = "pavadinimas" placeholder = "ideti foto">
<input type="text" name = "patients_nr" placeholder = "ivesti paciento numeri">
<button type="submit">ideti foto</button>
</form>
<h2>Pasalinti gydytojo foto</h2>
<form action="trintigydytoja.php" method="get">
<input type="text" name = "gydytojonumeris" placeholder = "ivesti numeri">
<button type="submit">Pasalinti</button>
</form>

<a href="naujasgydytojas.php?vardas=Ignas&pavarde=jooo">ikelti</a>



<?php

include("db_functions.php");

// createDoctor("Juozas", "Juozaitis");


?>





</body>
</html>