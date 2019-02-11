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

<?php          // 1. sukurti index.php
        // 2. parasyti PHP koda:
            //  susikurti masyv1- preke1: kaina, pavadinimas, kiekis
          //  $numeris = $_GET['x'];
          //  echo $preke1[$numeris] . "<hr />";
        // 3. pasileisti Narsykleje si puslapi
        // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
             //?x=1
         // 4. Narsykles adrese  pakeisti ?nr=0
         // 4. Narsykles adrese  pakeisti ?nr=2
         // ir paziureti kas bus
         ?>

        <?php
        $preke1 = [20, "Puodas", 50];
        $numeris = $_GET['x'];
        //echo $preke1[$numeris] . "<hr />";

        $preke2 = [10, "Peilis", 100];
        $preke3 = [5, "Saukstas", 90];
        $preke4 = [6, "Sakute", 80];

        $prekesVisos[0] = $preke1;
        $prekesVisos[1] = $preke2;
        $prekesVisos[2] = $preke3;
        $prekesVisos[3] = $preke4;

        $numeris = $_GET['x'];
        $manoPreke =  $prekesVisos[$numeris];
        print_r($manoPreke) . "<hr />";
        echo $manoPreke[1] . "<hr />";


        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
