<?php
  include('db-functions.php');
  if (isset($_GET['nr'])) {
    $nr = $_GET['nr'];
    deleteDoctor($nr);
  } else {
    echo "Toks gydytojas neegzistuoja.";
  }
