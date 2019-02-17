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

<form class="" action="naujasGydytojas.php" method="post">
  <button  type="button" name="button">
    <a href='naujasGydytojas.php?vardas=Antanas&pavarde=ANTANAITIS'> Kurti Nauja
    </a></button>
</form>


  <button  type="button" name="button">
    <a href='trintiGydytoja.php?numeris=14'> Trinti gydytoja
    </a></button>


<!--
3.3. Vartotojui paspaudus "registruotis" mygtuka - ivestus duomenis issaugoti DB.

index.php faile, sukurti gydytoju registracijos  forma (pvz: registracija.php )
Vartotojui paspaudus "registruotis" mygtuka - vartotoja perkelti i registracija.php faila (HINT: action='registracija.php')

registracija.php faile:
   Duomenis paimkite is $_GET ir perduokite i   createDoctor(....) f-ja, taip jums sukurs gydytoja -->

   <form class="" action="registracija.php" method="get">
     <input type="text" name="vardas" value="">
     <input type="text" name="pavarde" value="">
    <input type="submit" name="button" value="Registruotis">
   </form>

<!-- 4. index.php faile, isvesti visus gydytojus panaudojant while ir getDoctors(); -->

<!-- 5. PATOBULINTI 4- uzduoti:
1. salia gydytoju vardu ideti "Trinti" mygtuka

1.2. Kai  vartotojas  paspaus mygtuka - vartotoja perkelti i "delete-doctor.php" faila

2.1 delete-doctor.php faile iskviesti savo pasirasyta f-ja
 $numeris = $_GET['nr'];
 deleteDoctor($numeris); -->


   <?php
   require_once('db-functions.php');

   $visiGydytojai = getDoctors();
   print_r( $visiGydytojai );

   $gydytojas = mysqli_fetch_assoc( $visiGydytojai );
   while ($gydytojas) {
     echo "<h2>"
            . $gydytojas['name'] . "  " .  $gydytojas['lname']
                        . "</h2> ";

     $gydytojas = mysqli_fetch_assoc( $visiGydytojai );
   }



    ?>










        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
