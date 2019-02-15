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

        $alfa = new Vilkas;
        echo $alfa->tipas . "<br />";
        echo $alfa->svoris . "<br />";
        echo $alfa->printLigos() . "<br />";
        // echo $alfa->printPusryciai() . "<br />";
        echo "Vilkas pusryciu nepaveldejo :( " .$alfa->printPusryciai() . "<br />";
        $beta = new Gyvunas;
        echo "Gyvunas pusryciu: " . $beta->printPusryciai() . "<br />";
        echo "--------------------------------------------------------------<br />";
        $Andrius = new Vyras();
        echo $Andrius->ugis . "<br />";
        echo $Andrius->getTurtas() . "<br />";
        echo "Testosteroinas: " . $Andrius->getTestosteronas() . "<br />";
        echo $Andrius->setTestosteronas(8535);
        echo "Testosteroinas paskeistas: " . $Andrius->getTestosteronas() . "<br />";
        $Andrius->printVyroDuomenys();
      ?>

      <!-- javascript -->
      <script type="text/javascript" src="master.js"></script>
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
