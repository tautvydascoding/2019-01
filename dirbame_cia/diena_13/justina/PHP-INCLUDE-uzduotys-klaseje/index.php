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


        <!-- Susikurti 2 failus:

        preke.php  (siame faile tik 3 eilutes, jokiu body, head ar footer NERA).
        index.php

        Faile index.php naudojant include('preke.php');    f-ja "iterpti" preke.php


        // UZDUOTIS:
        // 1: sukurti "preke.php" faila
        // h2 (antraste)
        // p (aprasymas)
        // button (Kaina)

        // 2) sukurti index.php (ideti container ir row su bootatrap)
        // 2) index.php faile - paleisti FOR cikla 6 kartus include('preke.php');
        // 3) index.php
        // sukurti kintamuosius:
        // $kaina = ...;
        // $antraste = ...;
        // $aprasymas = ...;
        // 4) preke.php faile   isvesti kintamuosius $kaina, $antraste, $aprasymas
        pvz -->
        <!-- <h2> <?php echo $antraste;  ?> </h2> -->

        <?php // IDEA: ---------cia susikuriame kintamuosius index.php faile------------- ?>

        <!-- <?php
        $kaina = 200;
        $antraste = "Kompiuteris LENOVO";
        $aprasymas = "labai geras kompiuteris uz gera kaina";
         ?> -->


<?php // IDEA: --------------cia rankiniu budu include preke.php------------ ?>
<!-- <div class="container">
      <div class="row">
            <?php
            include("preke.php");
            include("preke.php");
            include("preke.php");
            include("preke.php");
            include("preke.php");
             ?>
      </div>
</div> -->

<?php // IDEA: --------------cia su FOR ciklu isvesta 6 kartus include preke.php ir sukurem kintamuosius pries FOR cikla ir juos isvedem i preke.php faila---------- ?>

<div class="container">
      <div class="row">
              <?php
              $kaina = 200;
              $antraste = "Kompiuteris LENOVO";
              $aprasymas = "labai geras kompiuteris uz gera kaina";
              for ($i=0; $i < 6 ; $i++) : ?>
                <?php include("preke.php"); ?>
              <?php       endfor; ?>
      </div>
</div>


        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
