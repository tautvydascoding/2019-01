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


// uzduotis 2
// A. susirasti 6 nuotraukas
// B. susikurti nuotrauku TIK pavadinimu masyva
// C. atspausdinti visas nuotraukas su ciklu, po 4-ris i eilute
// <img src='img/1.jpg' alt=''  />
// <img src='img/2.jpg' alt=''  />
// <img src='img/3.jpg' alt=''  />
// <img src='img/4.jpg' alt=''  />

$foto = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "1.jpg","2.jpg"];
echo count($foto);
 ?>
<section class="row">
    <?php for ($i=0; $i < count($foto); $i++) : ?>
        <div class="col-md-4">
            <img src="img/<?php    echo $foto[$i];  ?>" alt="">
            <!-- ARBA -->
            <?php printf( '<img src="img/%s"  >',    $foto[$i] ) ?>
        </div>
    <?php endfor; ?>
</section>

<section class="row bg-info">
    skirtukas ekrane
</section>

<!-- ==============tas pats issprestas su foreach================== -->

<!-- $foto = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "1.jpg","2.jpg"]; -->

        <section class="row">
            <?php foreach ($foto as   $stalciausTurinys): ?>
                 <div class="col-md-3">
                     <img src="img/<?php echo $stalciausTurinys ?>"  class="img-fluid" alt="">
                     <!-- ARBA -->
                     <!-- <?php printf(  '<img src="img/%s" alt="" class="img-fluid">', $stalciausTurinys  ) ?> -->
                 </div>
            <?php endforeach; ?>
        </section>


        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
