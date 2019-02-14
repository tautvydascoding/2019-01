<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <!-- galimos klaidos -->
  <!-- blogas kelias iki failo -->
  <!-- "/" ne i ta puse -->
  <!-- neuzdarete ">" -->
  <link rel="stylesheet" href="css/master.css">
  <!-- !!!! VISADA MANO CSS failas pats zemiausias -->
</head>

<body>

<h2>testuoju savo projekta</h2>
<?php
require_once('db_functions.php');

$visiGydytojai = getDoctors();
while ($gydytojas = mysqli_fetch_assoc($visiGydytojai)) {
  echo ("<h2>" . $gydytojas['data'] . " " . $gydytojas['antraste'] . " " . $gydytojas['aprasymas'] . "</h2>");
  echo "<hr />";
}





 ?>



  <!-- ------------------------ -->
  <script type="text/javascript" src="libs/bootstrap-4/js/bootstrap.min.js"> </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="libs/jquery.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <!-- !!! mano js failas pats zemiausias -->
  <script type="text/javascript" src="main.js"> </script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">





</body>

</html>
