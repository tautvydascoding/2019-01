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


      <?php
      // 1. sukurti index.php
      // 2. parasyti PHP koda:
          //  susikurti masyv1- preke1: kaina, pavadinimas, kiekis

          $preke1=[500, "XXL dviratis", 5];


          $numeris = $_GET["x"];
          echo "numeris: $numeris <br />";
          echo $preke1[$numeris] . "<hr />";

      // 3. pasileisti Narsykleje si puslapi
      // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
          // ?x=1
       // 4. Narsykles adrese  pakeisti ?x=0
       // 4. Narsykles adrese  pakeisti ?x=2
       // ir paziureti kas bus

      // 5.===============sunkesnis====================
       // A)  susikurti dar 2 masyvus  preke2, preke3
       $preke2=[125, "Paspirtukas", 8];
       $preke3=[50, "Riedlente", 25];

       // B) susikurti masyva 'visosPrekes' ;

       $visosPrekes=[];

       // C) sudeti visas prekes i masyva 'visosPrekes' (matrica);

       $visosPrekes[0]= $preke1;
       $visosPrekes[1]= $preke2;
       $visosPrekes[2]= $preke3;

       // 6. parasyti PHP koda:

           $numeris = $_GET["x"];
           $manoPreke =  $visosPrekes[$numeris];
           print_r($manoPreke);
           echo "<hr />";

       // 7. pasileisti Narsykleje si puslapi


       // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
          //  ?x=1
        // 4. Narsykles adrese  pakeisti ?x=0
        // 4. Narsykles adrese  pakeisti ?x=2
        // ir paziureti kas bus

?>

         <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
         <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
