<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.css">
        <link rel="stylesheet" href="css/master.css">
        <!-- mano css zemiausias -->

    </head>
    <body>

      <?php
        require_once("class.php");

        $Monika = new Zmogus();
        $Monika->vardas = "Monika" ;
        echo $Monika->vardas . " ugis: " . $Monika->ugis . "<br />";
        $Monika->ugis = 1.75;
        echo $Monika->vardas . " po pakeitimo ugis: " . $Monika->ugis . "<br />";
        echo $Monika->vardas . " einu: ";
        $Monika->einu();

        echo "<br />";
        echo "<br />";

        $Tadas = new Zmogus();
        $Tadas->vardas = "Tadas";
        $Tadas->ugis = 1.93;
        echo $Tadas->vardas . " ugis: " . $Tadas->ugis;

        echo "<br />";
        echo "<br />";

        $Kestas = new Zmogus();
        $Kestas->vardas = "Kestas";
        $Kestas->ugis = 1.66 ;
        echo $Kestas->vardas . " ugis: " . $Kestas->ugis;
        echo "<br />";
        echo $Kestas->vardas . " einu: ";
        $Kestas->einu();

      ?>

      <!-- javascript -->
      <script type="text/javascript" src="master.js"></script>
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
