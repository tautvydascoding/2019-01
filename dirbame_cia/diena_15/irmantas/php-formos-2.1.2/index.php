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

      <?php
          // include('db-functions.php');
          //   $doctor4 = getDoctor(4);
          //
          //   echo "<p>" . $doctor4["id"] . " " . $doctor4["name"] . " " . $doctor4["lastname"] . "</p>";
        ?>

        <?php
            include('db-functions.php');

              echo "<ul>";
              for ($i=1; $i < 6; $i++) {
                $gydytojas = getDoctor($i);
                echo "<li><a href='doctors.php?nr=$i'>" . $gydytojas["lastname"] . "</a></li>";
              }
              echo "</ul>";

              // print_r($daktaruVardai);
              // echo "<ul>";
              // for ($i=0; $i < 6 ; $i++) {
              //   echo "<li>" . $doctor4["lastname"] . "</li>";
              // }
              // echo "</ul>";
          ?>

      <!-- javascript -->
      <script type="text/javascript" src="master.js"></script>
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
