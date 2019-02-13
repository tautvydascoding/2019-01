<?php   include('db-functions.php');
if (isset($_GET['nr'])) {
  $numeris = $_GET['nr'];
  $gydytojas = getDoctor($numeris);
}
?>
<form class="" action="atnaujintiGydytoja.php?nr=<?php echo "{$gydytojas['id']}"; ?>" method="post">
  <p>Gydytojo <?php echo "{$gydytojas['name']} {$gydytojas['lname']}"; ?> vardo ir pavardės keitimas:</p>
  <input type="text" name="vardas" value="" placeholder="Vardas">
  <input type="text" name="pavarde" value="" placeholder="Pavardė">
  <input type="submit" name="" value="Atnaujinti gydytoją">
</form>
<?php
if (isset($_GET['nr'], $_POST['vardas'], $_POST['pavarde'])) {
  $nr = $_GET['nr'];
  $vardas = $_POST['vardas'];
  $pavarde = $_POST['pavarde'];
  updateDoctor($nr, $vardas, $pavarde);
}
 ?>

  <hr>
  <a href="index.php">Back</a>
