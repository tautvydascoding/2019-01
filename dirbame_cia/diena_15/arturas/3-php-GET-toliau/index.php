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

        <?php
          include('db-functions.php');
          $gydytojas1 = getDoctor(1);
          $gydytojas2 = getDoctor(2);
          $gydytojas3 = getDoctor(3);
          $gydytojas4 = getDoctor(4);
          ?>
          <ul>
            <a href="doctor.php?nr=<?php echo $gydytojas1['id'] ?>"><li><?php echo $gydytojas1['lname'] ?></li></a>
            <a href="doctor.php?nr=<?php echo $gydytojas2['id'] ?>"><li><?php echo $gydytojas2['lname'] ?></li></a>
            <a href="doctor.php?nr=<?php echo $gydytojas3['id'] ?>"><li><?php echo $gydytojas3['lname'] ?></li></a>
            <a href="doctor.php?nr=<?php echo $gydytojas4['id'] ?>"><li><?php echo $gydytojas4['lname'] ?></li></a>
          </ul>






        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
