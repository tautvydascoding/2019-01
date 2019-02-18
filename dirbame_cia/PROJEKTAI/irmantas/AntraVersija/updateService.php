<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title></title>
  </head>
  <body>
    <?php
    $nr = $_GET["nr"];
    require_once("db-funkcijos.php");
    $paslauga = getPaslauga($nr);
    ?>
    <form class="" action="updatedService.php" method="get">
      <input type="hidden" name="nr" value="<?php echo $nr?>"><br>
      <input type="text" name="pav" value="<?php echo $paslauga["pav"]?>"><br>
      <textarea name="textas" rows="8" cols="80" value=""><?php echo $paslauga["aprasymas"]?></textarea><br>
      <button type="submit" name="button">Naujinti</button>
    </form>
  </body>
</html>
