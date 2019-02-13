<?php
require_once('db-functions.php');
if (isset($_POST['vardas'], $_POST['pavarde'])) {
  $vardas = $_POST['vardas'];
  $pavarde = $_POST['pavarde'];
  $gydytojas = createdoctor($vardas, $pavarde);
}
 ?>
<hr>
<a href="index.php">Back</a>
