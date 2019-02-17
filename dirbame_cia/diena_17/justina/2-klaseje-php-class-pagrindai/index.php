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


        // UZDUOTIS 1: (atskirame faile Zmogus.php)
        // sukurti  klase: 'zmogus'
        // zmogus turi: public ugis, public vardas
        // f-ja 'einu()', kuri daro echo "Einu einu..."


        // UZDUOTIS 2:
        // susikurti  objektus: Monika, Tadas, Kestas
        require_once('Zmogus.php'); //issaukiame sukurta klase

        $Monika = new Zmogus();
        // echo $ugis; // error, nesuveiks, nes kintamasis ugis yra klases viduje. Bet ugi galima paimti nurodant teti.
        echo "Monikos ugis: $Monika->ugis <br />"; // nurodom, kur yra ugis. $ zenko reikia tik viena karta, ji padejom pries Monika

        // UZDUOTIS 2.1
        // Monikos objektui priskirti reiksmes: Monika, 155
        // Tado objektui priskirti reiksmes: Tadas, 180
        // Kesto objektui priskirti reiksmes: Kestas, 179

        $Monika->ugis = 155; //pakeiciam ugi i 155;
        echo "Monikos ugis po pakeitimo: $Monika->ugis <br />";

        $Monika->vardas = "Monika";
        echo "Vardas: $Monika->vardas <br />";

        $Tadas = new Zmogus();
        $Tadas->ugis = 180;
        $Tadas->vardas = "Tadas";
        echo "Tado ugis po pakeitimo: $Tadas->ugis <br />";
        echo "Vardas: $Tadas->vardas <br />";
        echo "$Tadas->vardas, ugis: $Tadas->ugis <br /> ";


        $Kestas = new Zmogus();
        $Kestas->ugis = 179;
        $Kestas->vardas = "Kestas";
        echo "Kesto ugis po pakeitimo: $Kestas->ugis <br />";
        echo "Vardas: $Kestas->vardas <br />";
        echo "$Kestas->vardas, ugis: $Kestas->ugis <br /> ";


        // UZDUOTIS 2.2
        // Atspausdinti MONIKOS, TADO varda ir ugi
        // paleisti f-ja 'einu()'

        $Tadas->einu();  //f-jos issaukimas su skliausteliais. F-ja veiks, jei jos tipas public.

?>




        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
