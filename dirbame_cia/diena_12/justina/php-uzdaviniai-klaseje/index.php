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

  $preke1 = ["kompiuteris", "komp.png", 200, "kompiuteris su lieciamu ekranu"];
  $preke2 = ["telefonas", "telef.jpg", 85, "telefonas Samsung 5000 ix"];
  $preke3 = ["plansete", "plans.jpg", 150, "plansete Sony su papildoma iranga"];
  $preke4 = ["pele", "pele.jpg", 10, "pele juoda ir belaide"];
  $preke5 = ["kompas", "komp.png", 200, "kompiuteris su lieciamu ekranu"];
  $preke6 = ["tele2", "telef.jpg", 85, "telefonas Samsung 5000 ix"];


   $visosPrekes [0] = $preke1;
   $visosPrekes [1] = $preke2;
   $visosPrekes [2] = $preke3;
   $visosPrekes [3] = $preke4;
   $visosPrekes [4] = $preke5;
   $visosPrekes [5] = $preke6;

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

      // IDEA: ------------Aprasymas ir mygtukas su kaina----------------

      echo "<div class='row'>";
          for ($i=0; $i < count($visosPrekes) ; $i++) {
                echo "<div class='col'>
                          <h2 class='bg-info'> {$visosPrekes [$i][0]}</h2>
                          <p> {$visosPrekes [$i][3]}</p>
                          <button class='btn btn-primary active btn-warning'> {$visosPrekes [$i][2]}</button>
                ";
                echo "</div>";
          }
      echo "</div>";

      // ----------------------KAIP IDETI NUOTRAUKAS---------------------------

     // nuotrauka (javascript kalbai)
     // let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";


     // 2  budai nuotraukoms (PHP kalbai)
      // printf("<img src='img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
      // printf("<img src='img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

      echo "<div class='row'>";
          for ($i=0; $i < count($visosPrekes) ; $i++) {
                echo "<div class='col'>
                          <h2 class='bg-info'> {$visosPrekes [$i][0]}</h2>
                          <p> {$visosPrekes [$i][3]}</p>
                          <button class='btn btn-primary active btn-warning'> {$visosPrekes [$i][2]}</button>
                ";
                printf("<img src='img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
                // printf("<img src='img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); // antras printf budas

                echo "</div>";
          }
      echo "</div>";

      // ------------------------prinf komandos panaudojimas------------------------

        $vardas1 = "Tom";
        $tikslas = "Silelis";
        $kiekis = 9.5;

        printf ("Aukstas %s nori nukeliauti uz %.2f ezeru i %s", $vardas1, $kiekis, $tikslas);

        // vietoje % zenklu ideda pvz vartotojo ivesta teksta. Ideda tokia tvarka, kokia yra surasyta kintamieji, t.y. i pirma % ides $vardas, i antra % ides $kiekis, i trecia % ides tikslas. Prie % reik nurodyti ir kintamojo tipa, kurio laukia (string - s)

      // ----------------------------------------------------------------------------



      // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
      // 3.1 surikiuoti prekes pagal kaina didejanciai
      // 3.2 atrinkti prekias iki 100 eur
      // sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
      // 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer
  // -->

 ?>
 <!-- html komentaras - nutraukiame PHP -->
<!-- cia uzdarome div container  -->

    <div class="row">

        <?php  for ($i=0; $i < count($visosPrekes) ; $i++) : ?>
          <div class='col'>
                <h2 class='bg-info'> <?php echo $visosPrekes [$i][0]; ?> </h2>
                <p> <?php echo $visosPrekes [$i][3]; ?> </p>
                <button class='btn btn-primary active btn-warning'> <?php echo $visosPrekes [$i][2]; ?> </button>
                <img class="img-fluid" src="img/<?php echo $visosPrekes [$i][1]; ?>" alt="">
          </div>
        <?php       endfor; ?>

</div>

<!-- kaip padaryti 3 stulpelius ir tada nukelt i sekancia eiluteje sunkus budas su IF -->

<div class="row">

    <?php  for ($i=0; $i < count($visosPrekes) ; $i++) :
                  if ($i % 3 === 0 && $i !== 0) : //kai nori sudet 3 foto ir tada nukelti i nauja eilute. i turi dalintis is 3 bet neturi buti lygu 0). Kai i%3 be liekanos, tada isspausdini, kad sena row uzdarytu (</div>) ir atidaryti nauja div su class=row.
                    echo "</div> <div class = 'row'>";
                  endif; ?>
      <div class='col'>
            <h2 class='bg-info'> <?php echo $visosPrekes [$i][0]; ?> </h2>
            <p> <?php echo $visosPrekes [$i][3]; ?> </p>
            <button class='btn btn-primary active btn-warning'> <?php echo $visosPrekes [$i][2]; ?> </button>
            <img class="img-fluid" src="img/<?php echo $visosPrekes [$i][1]; ?>" alt="">
      </div>
    <?php       endfor; ?>
</div>


<!-- kaip padaryti 3 stulpelius ir tada nukelt i sekancia eiluteje su BOOTSTRAP class="col-md-3" -->

<h1>=======prekiu isvedimas 3 stulpeliai===========</h1>
<div class="row">
    <?php   for ($i=0; $i < count($visosPrekes); $i++) :
                if ($i % 3 === 0 && $i !== 0) :
                    echo "</div> <div class='row'> ";
                endif;  ?>
                <div class="col-md-4">
                    <h2>     <?php echo  $visosPrekes[$i][0]; ?>     </h2>
                    <img class="img-fluid" src="img/<?php   echo  $visosPrekes[$i][1]; ?>"  alt="<?php echo  $visosPrekes[$i][0]; ?>  ">
                    <p>        <?php echo  $visosPrekes[$i][2]; ?>    </p>
                    <button >  <?php echo  $visosPrekes[$i][3]; ?>       </button>
                </div>
    <?php   endfor; ?>
</div>

<?php



      <!-- javascript -->
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="libs/jquery.min.js"></script>
      <script type="text/javascript" src="master.js"></script>

      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
