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
      <div class="fluid-container">
        <div class="row">
          <div class="col">
            <form class="" action="kurtiGydytoja.php" method="post">
              <p>Naujo gydytojo sukūrimas:</p>
              <input type="text" name="vardas" value="" placeholder="Vardas">
              <input type="text" name="pavarde" value="" placeholder="Pavardė">
              <input type="submit" name="" value="Pridėti gydytoją">
            </form>
            <br>
            <p>Gydytojai:</p>
            <?php
            include("db-functions.php");
             $gydytojai = getDoctors();
              while ($gydytojas = mysqli_fetch_assoc($gydytojai)) {
                echo "<a href='doctor.php?nr=" . $gydytojas['id'] . "'> Nr." . $gydytojas['id'] . " " . $gydytojas['name'] . " " . $gydytojas['lname'] . "</a>";
                echo " <a href='atnaujintiGydytoja.php?nr=".$gydytojas['id']."'><button class='' type='button' name='button'>Atnaujinti</button></a>";
                echo " <a href='trintiGydytoja.php?nr=".$gydytojas['id']."'><button class='' type='button' name='button'>Šalinti</button></a>";
                echo "<br>";
                echo "<br>";
              }
            ?>
          </div>  <!-- col end -->
          <div class="col">
            <form class="" action="kurtiPacienta.php" method="get">
              <p>Naujo paciento sukūrimas:</p>
              <input type="text" name="pvardas" value="" placeholder="Vardas">
              <input type="text" name="ppavarde" value="" placeholder="Pavardė">
              <input type="number" name="doctors_id" value="" min="0" max="99999999" placeholder="Gydytojo Nr.">
              <input type="submit" name="" value="Pridėti pacientą">
            </form>
            <br>
            <p>Pacientai:</p>
            <?php
              $pacientai = getPatients();
              while ($pacientas = mysqli_fetch_assoc($pacientai)) {
                echo "<a href='patient.php'>{$pacientas['name']} {$pacientas['lname']} </a>";
                echo "<a href='trintiPacienta.php?pnr={$pacientas['id']}'><button type='button' name='button'>Šalinti</button></a>";
                echo "<br>";
                echo "<br>";
              }

            ?>
          </div>
        </div>  <!-- row end -->
      </div>   <!-- container end -->

<a href=''></a>

        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
