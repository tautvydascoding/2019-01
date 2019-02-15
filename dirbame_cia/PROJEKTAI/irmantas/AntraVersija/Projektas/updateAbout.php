<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once("db-funkcijos.php");
      $nr = $_GET["nr"];
      $about = getAbout($nr);
    ?>

    <form class="" action="updatedAbout.php" method="post">
      <input type="hidden" name="nr" value="<?php echo $about["id"] ?>">
      <input type="text" name="vardas" value="<?php echo $about["vardas"] ?>" placeholder="vardas"><br>
      <input type="text" name="pavarde" value="<?php echo $about["pavarde"] ?>" placeholder="pavarde"><br>
      <input type="text" name="foto" value="<?php echo $about["foto"] ?>"  placeholder="foto"><br />
      <textarea name="aprasymas" rows="8" cols="80" placeholder="aprasymas"><?php echo $about["aprasymas"] ?></textarea><br>
      <button type="submit" name="button">Naujinti</button>
    </form>
  </body>
</html>
