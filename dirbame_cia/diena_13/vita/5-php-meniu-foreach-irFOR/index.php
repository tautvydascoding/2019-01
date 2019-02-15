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
      // uzduotis 1
      // A. susikurti meniu masyva: home, about, gallery, contact, blog
      // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)

      $meniu = ["Home", "About", "Gallery", "Contacts", "Blog"];
        echo "<nav> <ul>";
            for ($i=0; $i < count($meniu) ; $i++) {
                echo "<li>    {$meniu[$i]}    </li>";
      }
        echo "</ul> </nav> ";
// end meniu -->
          ?>

          <nav>
              <ul>
                  <?php foreach ($meniu as $stalcTurinys) : ?>
                      <li>
                          <?php echo $stalcTurinys; ?>
                      </li>
                  <?php endforeach; ?>
              </ul>
          </nav>

    <?php
          $foto = ["concert.jpg", "header.jpg", "writing.jpg", "2.jpg", "3.jpg", "4.jpg"];
     ?>

     <?php
     echo "<div class='row'>";
         for ($i=0; $i < count($foto); $i++) {
             echo "<div class='col-4'>";
                printf("<img src='images/%s' width='400px'/>", $foto[$i]);
              echo "</div>";
         }
     echo  "</div>";
      ?>


     <section class="row bg-light">
          skirtukas
     </section>

     <section class="row">
         <?php foreach ($foto as   $stalciausTurinys): ?>
              <div class="col-md-3">
                  <img src="img/<?php echo $stalciausTurinys ?>"  class="img-fluid" alt="">
              </div>
         <?php endforeach; ?>
     </section>





        <!-- ------------------------  -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
