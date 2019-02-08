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
    <
        <div class="container-fluid">
            <h1> Isijunk Inspect-console (mokomes js) </h1>

<!-- // uzduotis 1
// A. susikurti meniu masyva: home, about, gallery, contact, blog
// B. atspausdinti visus meniu punktus i HTML (su html tag'ais) -->
        <?php
    $masyvas = array("Home", "About", "Gallery","Contact", "Blog" );
    // <!-- Arba -->
    $masyvas = ["Home", "About", "Gallery","Contact", "Blog"];

    // start menu 
    echo "<nav> <ul>";
    for ($i=0; $i < count($masyvas) ; $i++) { 
        echo "<li>

            {$masyvas[$i]}

        </li>";
    }
    echo "</ul></nav>";
    ?>
    <!-- // foreach metodas -->

    <nav>
        <ul>
            <?php
                foreach ($masyvas as $stalcIndex => $stalcTurinys): ?>
                    <li>
                        <?php 
                        echo " stalciaus turinys: $stalcTurinys"; 
                        echo " stalciaus indexas: $stalcIndex";
                        ?>
                    </li>
                <?php endforeach; ?>
        </ul>
    </nav>
<!-- Foto ikelimas is masyvo -->

<?php $foto = ["foto1.jpg","foto2.jpg","foto3.jpg","foto4.jpg","foto5.jpg","foto6.jpg" ]; ?>
    
    <div class="container">
        <div class = "row">
        <?php for ($i=0 ; $i < count($foto)  ; $i++ ):  ?>
                <div class="col-md-4">
                        <img src='./img/<?php echo $foto[$i] ?>'>
                </div>
                <?php endfor; ?>
                
                    <?php foreach ($foto as  $stalcfoto): ?>
                    <div class="col-md-4">
                            <img src='./img/<?php echo $stalcfoto ?>'> 
                    </div>     
                        <?php endforeach;?>


                
        </div>
    


</div>



  <!-- end container  -->
        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
