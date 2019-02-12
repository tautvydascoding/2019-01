<?php
  require_once('db-functions.php');
  if (isset($_GET['pvardas'], $_GET['ppavarde'], $_GET['doctors_id'])) {
    $vardas = $_GET['pvardas'];
    $pavarde = $_GET['ppavarde'];
    $doctors_id = $_GET['doctors_id'];
    $pacientas = createPatient($vardas, $pavarde, $doctors_id);
  }
?>

<hr>
<a href="index.php">Back</a>
