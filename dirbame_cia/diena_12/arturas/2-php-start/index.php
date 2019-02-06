<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>2-php-start</title>
        <!-- search Bot'ai pvz: google neskanuos musu svetaines -->
         <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <!-- !! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>

      <?php
      $a = "Labadiena";
      echo "viso <br>";
      echo $a . "<br>";
      echo "Tekstas " . "dar teksto" . "sujungta";
      print("<br>panaudojus print() <br>");

      $slaptazodis = "drakonas1";
      $name = "bil";
      echo "Howdy, my name is $name <br>";
      echo "What will $name be in this line? <br>";
      echo 'What will $name be in this line? <br>'; // viengubose kabutese neveikia kintamieji

      // primityvus kintamieji
      $name1 = "tomas"; //string
      $age = 21; // number- integer
      $atlyginimas = 965.5; // number- float.doubleval
      $mirtiesData = NULL; // NULL
      $arDuotiPaskola = false; //boolean
      // NERA undefined

      // neprimityvus kintamieji
      $miestai = ["kaunas", "vilnius"]; // array
      // $zmogus = new KlasesPavadinimas(); //objektai
      // $failas; //resurso tipo


      // die("paskutinte jusu matyta zinute");

       ?>



        <!-- ------------------------ -->
        <script type="text/javascript" src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript" src=libs/jquery.min.js></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
