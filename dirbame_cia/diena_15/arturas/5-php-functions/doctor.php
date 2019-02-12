<?php
require_once('db-functions.php');
if (isset($_GET['nr'])) {
  $numeris = $_GET['nr'];
  $gydytojas = getDoctor($numeris);
  echo "<h2>Nr: " . $gydytojas['id'] . "</h2>";
  echo "<h3> {$gydytojas['name']} {$gydytojas['lname']}</h3>";
}
echo " <a href='atnaujintiGydytoja.php?nr=".$gydytojas['id']."'><button class='btn btn-outline-info' type='button' name='button'>Atnaujinti</button></a>";
echo " <a href='trintiGydytoja.php?nr=".$gydytojas['id']."'><button class='' type='button' name='button'>Šalinti</button></a>";
?>

<hr>
<a href="index.php">Back</a>
