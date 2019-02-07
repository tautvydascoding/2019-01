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

      <h1>testas</h1>
<div = class='container'>

<?php
      // UZDUOTIS 2 --------------
      // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
      // Antraste, img pavadinimas, kaina, prekes aprasymas

      // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
      // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
      // 2.B. i masyva visosPrekes, ideti "preke" masyva

  $visosPrekes = [];

  $preke1 = ["kompiuteris", "komp.img", 200, "kompiuteris su lieciamu ekranu"];
  $preke2 = ["telefonas", "telef.img", 85, "telefonas Samsung 5000 ix"];
  $preke3 = ["plansete", "plans.img", 150, "plansete Sony su papildoma iranga"];
  $preke4 = ["pele", "pele.img", 10, "pele juoda ir belaide"];

   $visosPrekes [0] = $preke1;
   $visosPrekes [1] = $preke2;
   $visosPrekes [2] = $preke3;
   $visosPrekes [3] = $preke4;

   print_r ($visosPrekes ); // spausdina masyvus, objektus ir tekstus.
   echo ("<br />");
   echo ("<br />");
   var_dump ($visosPrekes); // spausdina masyvus, objektus, tekstus ir nurodo ju tipus. Parodo daugiau duomenu, lengviau pamatyti klaidas.


      // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina

      echo "<div class='row'>"; // reik html susikurti div row (eilute)
          for ($i=0; $i < count($visosPrekes) ; $i++) {
                echo "<div class='col'>"; // reik html susikurt bootstrapui column
                    echo "<h2>". $visosPrekes [$i][0] . "</h2>"; // spausdiname tik pavadinimus
                echo  "</div>";
          }
      echo "</div>";

      // IDEA: --------------ARBA su vienu echo ------------------------

      echo "<div class='row'>";
          for ($i=0; $i < count($visosPrekes) ; $i++) {
                echo "<div class='col'>
                          <h2 class='bg-info'> {$visosPrekes [$i][0]}</h2>
                </div>";
          }
      echo "</div>";


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
  // -->

 ?>




</div>
<!-- cia uzdarome div container  -->



      <!-- javascript -->
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="libs/jquery.min.js"></script>
      <script type="text/javascript" src="master.js"></script>

      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
