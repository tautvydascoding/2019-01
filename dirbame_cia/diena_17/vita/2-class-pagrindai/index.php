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
    require_once("Zmogus.php");

      $Monika = new Zmogus();
      echo "Monikos ugis: $Monika->ugis <br>";
      $Monika->ugis = 155;
      echo "Monikos ugis po pakeitimo: $Monika->ugis <br>";
      $Monika->vardas = "Monika";
      $Monika->ugis++;
      echo "Monikos ugis po pakeitimo: $Monika->ugis <br>";
      echo "Monikos vardas po pakeitimo: $Monika->vardas <br>";

      $Tadas = new Zmogus();
      $Tadas->ugis = 180;
      $Tadas->vardas = "Tadas";
      echo "Tado ugis po pakeitimo: $Tadas->ugis <br>";
      echo "Tado vardas po pakeitimo: $Tadas->vardas <br>";

      $Kestas = new Zmogus();
      $Kestas->ugis = 179;
      $Kestas->vardas = "Kestas";
      echo "Kesto ugis po pakeitimo: $Kestas->ugis <br>";
      echo "Kesto vardas po pakeitimo: $Kestas->vardas <br>";

      echo "$Monika->vardas, $Monika->ugis  <br>  $Tadas->vardas, $Tadas->ugis  <br> " ;

      echo $Tadas->einu() ;



     ?>

<br>


        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
