<?php
require_once('db-functions.php');
if (isset($_GET['nr'])) {
  $numeris = $_GET['nr'];
  $gydytojas = getDoctor($numeris);
  echo "<form action='atnaujintiGydytoja.php' method='post'>
          <p>Gydytojo {$gydytojas['name']} {$gydytojas['lname']} vardo ir pavardės keitimas:</p>
          <input type='text' name='vardas' value='{$gydytojas['name']}'>
          <input type='text' name='pavarde' value='{$gydytojas['lname']}'>
          <input type='hidden' name='nr' value='{$gydytojas['id']}'>
          <input type='submit' value='Atnaujinti gydytoją'>
        </form>";
}
if (isset($_POST['nr'], $_POST['vardas'], $_POST['pavarde'])) {
  $nr = $_POST['nr'];
  $vardas = $_POST['vardas'];
  $pavarde = $_POST['pavarde'];
  updateDoctor($nr, $vardas, $pavarde);
}
 ?>

  <hr>
  <a href="index.php">Back</a>
