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


        <!-- // UZDUOTIS
        // 1. suskurti faila:  straipsnis.php
        // 1.1 straipsnis.php faile sukurti 2 kintamuosius $vardas, $pavarde
        // 1.2 straipsnis.php faile sukurti masyva: 'straipnis' = ['antraste', 'aprasymas', 'data'];
        //
        // pvz:   'BMW vel preleke saligatviu',   'Lorem lorem....', '2010-12-01'

        // 2. index.php faile  ideti:
        // include( 'straipsnis.php');



        2.1 index.php failesukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde
        2.2 index.php faile sukurti   'container' 'main' 'article'
        2.3 'article' videje sukurti:
        2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
        2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
        2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo)  -->

        <?php include("straipsnis.php"); ?>

        <div>
            <?php echo $vardas . " " . $pavarde; ?>
        </div>



        <section class="container">
            <main>
                <article class="bg-warning">
                      <h2> <?php echo $straipsnis[0]; ?>  </h2>
                      <p class="bg-success"> <?php echo $straipsnis[1]; ?>  </p>
                      <div> <?php echo $straipsnis[2]; ?> </div>
                </article>
            </main>
        </section>





        <!-- ==================== -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
