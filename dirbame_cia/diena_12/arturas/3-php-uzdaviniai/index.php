<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>3-php-uzdaviniai</title>
        <!-- search Bot'ai pvz: google neskanuos musu svetaines -->
         <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <!-- !! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>

      <?php
      echo "<div class='container'";
      // UZDUOTIS 2 --------------
      // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
      // Antraste, img pavadinimas, kaina, prekes aprasymas

      // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
      // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
      $preke1 = ["Melynas", "5.jpg", "melynas fotelis", 50.99];
      $preke2 = ["Baltas", "6.png", "baltas fotelis", 60];
      $preke3 = ["Balionas", "balionas.png", "Juodai baltas balionas", 100];
      $preke4 = ["Melynas", "6.png", "melynas fotelis", 125];
      $preke5 = ["Baltas", "balionas.png", "baltas fotelis", 57.53];
      $preke6 = ["Balionas", "5.jpg", "Juodai baltas balionas", 99.9];
      $preke7 = ["Melynas", "5.jpg", "melynas fotelis", 12];


      print_r($preke1); // spausdina masyvus,objektus, tekstus
      var_dump($preke1); // spausdina masyvus, obj, tekstus!!ir duomenu tipa!
      // 2.B. i masyva visosPrekes, ideti "preke" masyva
      $visosPrekes[0] = $preke1;
      $visosPrekes[1] = $preke2;
      $visosPrekes[2] = $preke3;
      $visosPrekes[3] = $preke4;
      $visosPrekes[4] = $preke5;
      $visosPrekes[5] = $preke6;
      $visosPrekes[6] = $preke7;


      // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina
      echo "<div class='row'>";
        for ($i=0; $i < count($visosPrekes); $i++) {
          echo "<div class='col'>";
            echo "<h2>".$visosPrekes[$i][0]."</h2>";
          echo "</div>";
        }
      echo "</div>";

      // ---------------------ARBA---------------------------
      echo "<div class='row'>";
        for ($i=0; $i < count($visosPrekes); $i++) {
          echo "<div class='col'>
            <h2 class='bg-success'> {$visosPrekes[$i][0]} </h2>
            <p>{$visosPrekes[$i][2]}</p>
            <button class='btn btn-sm btn-outline-primary'>{$visosPrekes[$i][3]}€</button>";
            printf("<img src='img/%s' class='img-fluid' alt=''  />", $visosPrekes[$i][1]);
          echo "</div>";
        }
      echo "</div>";
       ?>
      <!-- html-e iterptas php -->
      <div class='row'>
        <?php for ($i=0; $i < count($visosPrekes); $i++) :
                if ($i % 3 == 0 && $i != 0) :
                  echo "</div> <div class='row'>";
                endif;     ?>
          <div class="col-md-4">
            <h2 class="bg-warning"><?php echo $visosPrekes[$i][0] ?></h2>
            <p><?php echo $visosPrekes[$i][2] ?></p>
            <button class="btn btn-outline-danger"><?php echo $visosPrekes[$i][3] ?>€</button>
            <img class="img-fluid" src="img/<?php echo $visosPrekes[$i][1] ?>" alt="<?php echo $visosPrekes[$i][0] ?>">
          </div>

        <?php endfor; ?>
      </div>

      <?php
      $vardas1 = "Tomas";
      $tikslas = "Silelis";
      $kiekis1 = 9.5;
      printf("Aukstas %s nori keliauti uz %.1f ezeru i %s.", $vardas1, $kiekis1, $tikslas);

     // 2  budai nuotraukoms (PHP kalbai)
      // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
      // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

      echo "</div>"; //container end
       ?>



        <!-- ------------------------ -->
        <script type="text/javascript" src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript" src=libs/jquery.min.js></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
