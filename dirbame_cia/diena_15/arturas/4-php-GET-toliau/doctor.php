<?php
require_once('db-functions.php');
// $numeris = $_GET['nr'];
// $gydytojas = getDoctor($numeris);
// echo "<p>Gydytojas: ".$gydytojas['name']." ".$gydytojas['lname']." Numeris: ".$gydytojas['id']."</p>";

// ---------SUKURIMAS------------
if (isset($_GET['vardas'], $_GET['pavarde'])) {
  $vardas = $_GET['vardas'];
  $pavarde = $_GET['pavarde'];
  $gydytojas = createdoctor($vardas, $pavarde);
}
// ----------TRYNIMAS------------
if (isset($_POST['nrdel'])) {
  $nr = $_POST['nrdel'];
  deleteDoctor($nr);
}
// ----------ATNAUJJINIMAS--------
if (isset($_POST['nrupd'], $_POST['vardasupd'], $_POST['pavardeupd'])) {
  $nr = $_POST['nrupd'];
  $vardas = $_POST['vardasupd'];
  $pavarde = $_POST['pavardeupd'];
  updateDoctor($nr, $vardas, $pavarde);
}
// ----------  --------

?>
<hr>
<a href="index.php">Back</a>
