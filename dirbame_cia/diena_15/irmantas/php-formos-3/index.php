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
        $preke1 = [100, "Dviratis", 10];
        $preke2 = [150, "Triratis", 20];
        $preke3 = [1500, "Motociklas", 5];
        $visosPrekes = [$preke1,$preke2,$preke3];

        // $numeris = $_GET['x'];
        // echo $preke1[$numeris] . "<hr />";

        $numeris = $_GET['x'];
        $manoPreke =  $visosPrekes[$numeris];
        print_r($manoPreke);
        echo "<hr />";


















        // $x = $_GET['tekstas'];
        // echo $x;

        // if(in_array("tekstas", $_GET)) {
        //   $x = $_GET["tekstas"];
        //   echo "kazkurio stalciau turinys yra: <hr />";
        // }

        // if (array_key_exists("tekstas",$_GET)) {
        //   $x = $_GET["tekstas"];
        //   echo "stalcius tekstas egzistuoja:" . $x . "<hr>";
        // } else {
        //   echo "tokio stalciaus nera tekstas";
        // }
        ?>
      <!-- javascript -->
      <script type="text/javascript" src="master.js"></script>
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
