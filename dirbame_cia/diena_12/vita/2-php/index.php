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
            //komentaras
            /*ilgas komentaras*/
              $a = "laba diena";
              echo "viso" ; //echo isveda i ekrana klientui

              $slaptazodis = "drakonas1"; //nera echo komandos, todel neisveda i ekrana, o lieka serveryje

              print("panaudojus print() isveda i ekrana");
              //die("paskutine matyta zinute"); //uz sitos sinutes nutruksta kodo veikimas, retai naudojama

              $name = "Tom";
              $name2 = "paul";
              echo "Per devynis ezerus ejo $name ir sutiko $name2. <br/> ";
              echo 'Per devynis ezerus ejo $name ir sutiko $name2. <br/> ';

              //primityvus kintamieji:
              $name3 = "Tomas"; //string
              $age = 21; // number integer - sveikas sk
              $atlyginimas = 960,50; // number - float/doubleval
              $mirtiesData = NULL // NULL
              $arDuotiPaskola = false; //Boolean

              //neprimityvus kintamieji:
              $miestai = ["kaunas", "vilnius",]; // masyvas
              //$zmogus = new KlasesPavadinimas(); //Objektai
              //$failas; // resurso tipo

            ?>



        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
