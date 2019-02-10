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

      <section class="container">


        <h1> Isijunk Inspect-console (mokomes js) </h1>

        <!-- // uzduotis 1
        // A. susikurti meniu masyva: home, about, gallery, contact, blog
        // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)



        <?php
        // sukuriame masyva:
            $meniu = ["home", "about", "gallery", "blog"];

        //============START meniu=====================
            echo "<nav> <ul>" ;

            // su FOR ciklu isvedame meniu punktus, esancius masyve
                for ($i=0; $i < count ($meniu) ; $i++) {
                      echo "<li>
                              {$meniu[$i]}
                      </li>";
                }

            echo "</ul></nav>";
        //============END meniu=====================
        ?>


        <!-- ============kitas budas su FOREACH ============== -->
      <nav>
          <ul>
              <?php foreach ($meniu as $stalciausTurinys) : ?>
                      <li>
                          <?php echo $stalciausTurinys; ?>
                      </li>
              <?php endforeach ?>
         </ul>
      </nav>


      <!-- ======kitas budas su FOREACH atsispausdint ir stalciaus indexa====== -->
    <nav>
        <ul>
            <?php foreach ($meniu as $manoIndex => $stalciausTurinys) : ?>
                    <li>
                        <?php

                        echo "stalciaus index: $manoIndex";
                        echo "stalciaus turinys: $stalciausTurinys";
                        ?>
                    </li>
            <?php endforeach ?>
       </ul>
    </nav>

    <!-- // uzduotis 2
    // A. susirasti 6 nuotraukas
    // B. susikurti nuotrauku TIK pavadinimu masyva
    // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
    // <img src='./img/1.jpg' alt=''  />
    // <img src='./img/2.jpg' alt=''  />
    // <img src='./img/3.jpg' alt=''  />
    // <img src='./img/4.jpg' alt=''  />


    // <img src='./img/<?php echo $x ?>' alt=''  /> -->


    <?php
        $fotoPavadinimai = ["komp.png",
                            "pele.jpg",
                            "telef.jpg",
                            "komp.png",
                            "pele.jpg",
                            "telef.jpg" ];
     ?>

     <div class="row">
           <?php  for ($i=0; $i < count($fotoPavadinimai) ; $i++) : ?>
             <div class='col-md-4'>
                   <img class="img-fluid" src="img/<?php echo $fotoPavadinimai [$i]; ?>" alt="">
             </div>
           <?php       endfor; ?>
     </div>


     <!-- ======kitas budas su FOREACH =============== -->
<h2>nuo cia turi atspausdint su foreach</h2>

     <div class="row">

     <?php foreach ($fotoPavadinimai as $nuotrauka) : ?>
           <div class='col-md-4'>
                 <img class="img-fluid" src="img/<?php echo $nuotrauka; ?> " alt="">
           </div>

     <?php endforeach ?>
   </div>

   <!-- ======kitas budas su FOR ir printf  =============== -->
   <h2>nuo cia turi atspausdint su for ir printf</h2>


   <div class="row">
             <?php  for ($i=0; $i < count($fotoPavadinimai) ; $i++) : ?>
                  <div class='col-md-4'>
                        <?php printf('<img class="img-fluid" src="img/%s" >', $fotoPavadinimai[$i]) ?>

                  </div>
            <?php endfor; ?>
   </div>

 </section>
<!-- ======  uzdaromas  container  ======== -->



     <!-- <img class="img-fluid" src="img/<?php echo $fotoPavadinimai ?>" alt=""> -->



        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
