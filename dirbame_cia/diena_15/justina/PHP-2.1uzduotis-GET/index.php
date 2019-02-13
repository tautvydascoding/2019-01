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

      // reiksmes tikrinimas, ar ji yra masyve. Jeigu rado, grazina TRUE.
      //          ieskomasis  masyvas(kurio viduje ieskome)
      if(in_array("aaaa", $_GET)) {
              echo "kazkurio stalciaus turinys yra:", $x;
              echo "<hr />";
          }

      // ar masyve egzistuoja stalcius pavadinimu "tekstas"

      if (array_key_exists("tekstas", $_GET)) {
        $x = $_GET["tekstas"];
        echo "stalcius tekstas egzistuoja:" . $x;
        echo "<hr />";
      } else {
        echo "stalcius pavadinimu 'tekstas' neegzistuoja";
        echo "<hr />";

      }

      // ar "y" turi kokia nors reiksme?

      $y;   // y reiksmes neturi
      if (isset($y)) {
        echo $y;
      } else {
        echo "y neturi reiksmes";
        echo "<hr />";

      }




          ?>


      <!-- // 3. pasileisti Narsykleje si puslapi
      // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
       //     ?tekstas=Mano ivestas tekstas

      // 4. Narsykleje  pakeisti zodi "tekstas" i koki nors kitoki
      // 4.1 istaisyti klaidas index.php faile -->


        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
