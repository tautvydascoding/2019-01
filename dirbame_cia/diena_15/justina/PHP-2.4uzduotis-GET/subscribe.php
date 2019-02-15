<?php
// 3. subscribe.php faile
// isvesti elpasta

// echo "Jusu el pastas:" . $_GET["elpastas"] . "<br />";

// 5. subscribe.php faile suprogramuoti tikrinima:
// kad vartotojui nieko neivedus ismestu pranesima

// AR yra kazkas ivesta i formos laukeli? T.y. ar stalcius turi kokia nors reiksme? Jei tikrintume, ar stalcius egzistuoja, tai jis gali egzistuoti, bet jame gali nieko nebuti. Todel reik tikrinti reiksme.


// cia patikrinam ir gaunam, kad tas stalcius egzistuoja. Bet netikrinam, ar i ta stalciu kazkas ideta. Todel sis budas netinka.
// if ( array_key_exists('elpastas', $_GET) ){
//     $x = $_GET['elpastas'];
//     echo "Jusu el pastas:" . $x .  "<hr />";
// } else {
//     echo "Neivedete savo el pasto";
// }

// kad patikrinti, ar stalcius turi reiksme:
if ( array_key_exists('elpastas', $_GET) ){
    if ($_GET['elpastas']  == "" ) { //tikrinam, ar GET masyve stalcius 'elpastas' yra tuscias ("" arba null). Jei TRUE, tada issoks pranesimas, kad neivestas el pastas. kitu atveju parodys ivesta el.pasta.
      echo "Neivedete savo el pasto";
    } else {
      echo "Jusu el pastas:" . $_GET['elpastas'].  "<hr />";
    }
} else {
  echo "stalciaus tokiu pavadinimu 'elpastas' nera";
}

// jeigu vartotojas kazka ivede - isvesti jo email i ekrana

// jeig vartotojas nieko neivede - isvesti pranesima, kad elpastas neivestas

 ?>
