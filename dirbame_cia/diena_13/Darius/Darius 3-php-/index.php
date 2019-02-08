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
        <div class="container-fluid">
            <h1> Isijunk Inspect-console (mokomes js) </h1>


        <?php

    // UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
$preke1 = [ "XXL dviratis", "1.jpg", "lelems dviratis su dviem ratasi dovanu", 10.99];
$preke2 = [ "triratis ", "2.jpg", " plieninis su pripusiamais ratais ", 199.99];
$preke3 = [ "slides", "3.jpg", "2vnt 48 ismiera", 50];
$preke4 = [ "reiduciai", "4.jpg", "3 ratuku pritaikyti suoliams", 250];

    print_r( $preke1 ); // spausdina masyvus, obj, tekstus
    var_dump( $preke1 ); // spausdina masyvus, obj, tekstus !!! ir kartu duomenu tipa

    // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
    // 2.B. i masyva visosPrekes, ideti "preke" masyva
    $visosPrekes[0] = $preke1;
    $visosPrekes[1] = $preke2;
    $visosPrekes[2] = $preke3;
    $visosPrekes[3] = $preke4;
    // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina

    echo "<div class='row'>";
        for ($i=0; $i < count($visosPrekes); $i++) {
            echo "<div class='col'>";
            echo "    <h2>" . $visosPrekes[$i][0] . "</h2>";
            echo "</div>";
        }
    echo  "</div>";
    //-------------------------ARBA--------------------------
    ?>
    <!-- html komentaras-- nutraukiam PHP-->

        <div class = "row">
            <?php for ($i=0; $i <count($visosPrekes) ; $i++): // prekiu ikelimas po 3
                if($i % 3 ===0 && $i !==0):
                    echo "</div> <div class = 'row'>"; 
                
                endif; ?>

 <!-- prekiu  isvedimas-->
                <div class="col-md-4">
                    <h2 class="bg-info">
                    <?php echo $visosPrekes[$i][0]; ?>
                    </h2>
                
                    <img class="img-fluid" src="img/<?php echo $visosPrekes[$i][1]; ?> "
                    <p class="bg-light">
                    <?php echo $visosPrekes[$i][2]; ?>
                    </p>
                
                    <button class="bg-danger">
                    <?php echo $visosPrekes[$i][3]; ?>
                    </button>
                 </div>
                
            
            
             
            <?php endfor; ?>
             
        
        </div>
    <?php
    $vardas1 = "Tom";
    $vardas2 = 'Ona';
    $kiekis = 9.5;
    $tekstas ='Aukstas %s nori buti su %s ir nubegti %f';
    echo sprintf($tekstas, $vardas1, $vardas2, $kiekis);
   // nuotrauka (javascript kalbai)
   // let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

   // 2  budai nuotraukoms (PHP kalbai)
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
        


    // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
    // 3.1 surikiuoti prekes pagal kaina didejanciai
    // 3.2 atrinkti prekias iki 100 eur
    // sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
    // 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer


    ?>



        </div>  <!-- end container  -->
        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
