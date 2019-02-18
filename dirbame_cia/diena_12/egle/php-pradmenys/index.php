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
        <div class="container">


        <h1> Isijunk Inspect-console (mokomes js) </h1>

        <?php
        // komentaras;
        /* ilgas
        komentaras
        */

        $a = "laba diena <br>";
        echo "viso <br>";
        echo $a;
        echo "tekstas"." "."sujungtas tekstas <br>";

        $slaptazodis = "drakonas1 <br>";

        print("panaudojus print() isvedima <br>");

        // die("niekas nebeveiks");

        $name = "Tomas";
        $name2 = "Linu";
        echo "brido $name per sniega su $name2 <br />";
        echo 'brido $name per sniega su $name2 <br />';


        //primityvus kintamieji:
        $name = "tomaitis"; //string
        $age = 21; //number-integer (sveikas)
        $atlyginimas = 960.5; // number - float/double ( su kableliu)
        $mirtiesData = NULL; //is_null
        $arDuotiPaskola = false; //boolean;


        //nera primityvus kintamieji:
        // $miestai = ["Kaunas", "Vilnius"]; //array
        // $$zmogus = new KlasesPavadinimas // pbjektai SplObjectStorage
        //$failas;  //resurso tipo

          //-----------------------------------------------------------------
          // UZDUOTIS 2 --------------
          // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
          // Antraste, img pavadinimas, kaina, prekes aprasymas

          // let visosPrekes = [];
          $visosPrekes = [];

          // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
          // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)

          // let preke1 = ["batai", "1.jpg", "tapu tapu", 120];
          // let preke2= ["kuprine", "2.jpg", "daug kas telpa", 40];
          // let preke3 = ["akiniai", "3.jpg", "kad saule nesviestu i akis", 190];
          // let preke4 = ["kepure", "4.jpg", "labai reikalingas daiktas", 15];

          $preke1 = ["batai", "1.jpg", "tapu tapu", 120];
          $preke2= ["kuprine", "2.jpg", "daug kas telpa", 40];
          $preke3 = ["akiniai", "3.jpg", "kad saule nesviestu i akis", 190];
          $preke4 = ["kepure", "4.jpg", "labai reikalingas daiktas", 15];

          print_r($preke1); //spausdina masyvus, obj, tekstus;
          var_dump ($preke2); // spausdina masyvus, obj, tekstus!! ir kartu duomenu tipa.

          $visosPrekes[0] = $preke1;
          $visosPrekes[1] = $preke2;
          $visosPrekes[2] = $preke3;
          $visosPrekes[3] = $preke4;




          // 2.B. i masyva visosPrekes, ideti "preke" masyva
          // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstra
          echo "<div class='row'>";
          for ($i=0; $i <count($visosPrekes) ; $i++) {
            echo "<div class='col'>";
            echo "<h2 class='bg-info'>". $visosPrekes[$i][0] ."</h2>";
            echo "<p>". $visosPrekes[$i][2] ."</p>";
            echo "<button class = 'btn-lg' >". $visosPrekes[$i][3] ."</button>";
            printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
              echo "</div>";
          }
          echo "</div>";

          // $vardas1 = "Petras";
          // $tikslas = "Silelis";
          // $kiekis = 9.5;
          //
          // printf("Aukstas %s nori keiauti uz %.2f ezeru i %s", $vardas1, $kiekis, $tikslas);

          // ARBA:

          // echo "<div class='row'";
          //   for ($i=0; $i < count($visosPrekes) ; $i++) {
          //     echo "<div class='col'>
          //         <h2 class='bg-info'> {$visosPrekes[$i][0]} </h2>
          //             </div>";
          //   }
          //   echo "</div>";

         // nuotrauka (javascript kalbai)
         // let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

         // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />")




         // 2  budai nuotraukoms (PHP kalbai)
          // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
          // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);



          // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
          // 3.1 surikiuoti prekes pagal kaina didejanciai
          // 3.2 atrinkti prekias iki 100 eur
          // sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
          // 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer



       ?>
       <!--nutraukiam PHP-->

       <div class="row">
          <?php for ($i=0; $i < count($visosPrekes); $i++) :     ?>
            <div class="col">
                <h2 class="bg-info"> <?php echo $visosPrekes[$i][0]; ?> </h2>
                <p> <?php echo $visosPrekes[$i][2]; ?> </p>
                <button class = 'btn-lg'> <?php echo $visosPrekes[$i][3]; ?>  </button>
                <img class= "img-fluid" src="./img/<?php echo $visosPrekes[$i][1]; ?>" alt="">



            </div>


          <?php endfor;?>
       </div>


        <!-- prekiu isvedimas 3 stulpeliais -->
       <div class="row">
          <?php for ($i=0; $i < count($visosPrekes); $i++) :
                    if ($i % 3 === 0 && $i !==0) :
                      echo "</div> <div class='row'>";
                    endif;  ?>
            <div class="col-md-4">
                <h2 class="bg-info"> <?php echo $visosPrekes[$i][0]; ?> </h2>
                <p> <?php echo $visosPrekes[$i][2]; ?> </p>
                <button class = 'btn-lg'> <?php echo $visosPrekes[$i][3]; ?>  </button>
                <img class= "img-fluid"  src="./img/<?php echo $visosPrekes[$i][1]; ?>" alt="">



            </div>


          <?php endfor;?>
       </div>


     </div> <!-- uzdaromas container -->


        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
