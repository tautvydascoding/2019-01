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


        // UZDUOTIS 1:
        // sukurti  klase: 'zmogus'

        // zmogus turi:
        // private ugis,
        // private vardas
        // public f-ja 'getManoUgis()'
        // public f-ja 'getManoVardas()'
        // public f-ja 'setManoUgis($x)'
        // public f-ja 'setManoVardas($x)'
        //* kintamojo paemimas f-je:    $this->vardas
        require_once ('Zmogus.php');

        $Monika = new Zmogus(165, "Monikita");
        $Tadas = new Zmogus (195, "Tadukas");
        //echo $Monika->ugis; //ERROR Cannot access private property
        //echo $Monika-> 155; //ERROR Cannot access private property

        echo "Monikos ugis po pakeitimo:". $Monika->getUgis();




        // UZDUOTIS 2.1
        // susikurti  objektus: Monika

        // UZDUOTIS 2.2
        // Atspasudinti varda ir ugi naudojant
        // f-ja 'manoUgis()'
        // f-ja 'manoVardas()'


        // UZDUOTIS 3:
        // susikurti konstruktoriu

        // UZDUOTIS 3.1:
        // susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)

?>




        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
