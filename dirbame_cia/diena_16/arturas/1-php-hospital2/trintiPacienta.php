<?php
  require_once('db-functions.php');
  if (isset($_GET['pnr'])) {
    $nr = $_GET['pnr'];
    deletePatient($nr);
  } else {
    echo "Toks pacientas neegzistuoja!";
  }
?>

<hr>
<a href="index.php">Back</a>
