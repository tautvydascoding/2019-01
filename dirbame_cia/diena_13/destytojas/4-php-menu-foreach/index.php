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
        $m =   array( "Tomas", "Tomauskis" );
        $n =   ["Tomas", "Tomauskis" ];
        // $x = "Juozas";
        // $text = "ilgas  $x tekstas ";
        // A)
        $meniu = ["home", "about", "gallery", "contact", "blog"];

        // =======start meniu===========================
        echo "<nav> <ul>";
        for ($i=0; $i < count($meniu); $i++) {
            echo "<li>
                        {$meniu[$i]}
                 </li>";
        }
        echo "</ul></nav> ";
        // =======END meniu =================================
     ?>
        <nav>
            <ul>
                <?php foreach ($meniu as $manoIndex =>  $stalcTurinys) : ?>
                    <li>
                        <?php
                              echo " stalciaus index: $manoIndex";
                              echo " stalciaus turinys: $stalcTurinys";
                        ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>





        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
