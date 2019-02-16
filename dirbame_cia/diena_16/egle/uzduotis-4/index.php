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
        require_once('../1-php-db-functions-doctors-visos/database-functions.php');
        // if ($prisijungimas){
        //     echo " Prisijungti prie DB pavyko. <br />";
        //   }else {
        //     echo " ERROR: Prisijungti rpie DB nepavyko. <br />". mysqli_connect_error();
        //   }
        //

        function getDoctors($nr){
          $manoSQL = "SELECT * FROM doctors
                                WHERE $nr = 'id'
                                LIMIT 1
          ";
        }
        getDoctors(2);

        echo getDoctors(2);



        //
        // function getDoctors($kiekGydytoju = 99999){
        //   $manoSQL = "SELECT * FROM doctors
        //                        WHERE id = '$nr'
        //                        LIMIT 1
        //              ";
        //   $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
        //   return $rezultatai;
        // };
        // $gydytojas = mysqli_fetch_assoc($visiGydytojai);
        //
        // while ($gydytojas != NULL) {
        //   print_r($nr);
        //   echo "<hr />";
        //   $gydytojas = mysqli_fetch_assoc($visiGydytojai);
        // }




         ?>



        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
