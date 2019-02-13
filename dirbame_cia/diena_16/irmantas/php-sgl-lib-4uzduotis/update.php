<?php
include('db-functions.php');

$nr = $_GET["uId"];
$doctor = getDoctor($nr);



?>
<form class="" action="updated.php" method="get">
  <input type="text" name="id" value="<?php echo $doctor["id"]?>">
  <input type="text" name="vardas" value="<?php echo $doctor["name"]?>">
  <input type="text" name="pavarde" value="<?php echo $doctor["lastname"]?>">
  <input type="submit" name="" value="update">
</form>
