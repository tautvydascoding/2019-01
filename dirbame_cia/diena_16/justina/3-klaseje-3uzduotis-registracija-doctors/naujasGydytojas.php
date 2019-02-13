<?php
require_once('db_functions.php'); //prasom viena karta;



// createDoctor() paleidimas per narsykle

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
// include('db_functions.php'); //naudojam require_once


// createDoctor("Juozas", "Juozaitis");
// echo "<h2> Sekmingai uzregistravome gydytoja</h2>";


// 1.3. Narsykleje nueiti:
//    localhost/ ... /naujasGydytojas.php

// createDoctor() paleidimas per narsykle per su mygtuku

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
// include('db_functions.php'); //paleidziam require_once
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);
// 1.3. Narsykleje nueiti (pamatysite klaida):
//    localhost/ ... /naujasGydytojas.php

// 1.4. Narsykleje nueiti:
//    localhost/ ... /naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS

// 1.5 faile index.php
// susikurti mygtuka "Naujas gydytojas" su "a" linku.
// "a" linkas turi rodyti i :   naujasGydytojas.php?vard=TOMAS&parv=TOMAUSKIS
// pvz:
// <a href='naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS'> Kurti Nauja</a>



// ta pati padaryti su DELETE
