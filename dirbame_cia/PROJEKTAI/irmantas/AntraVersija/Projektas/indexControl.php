<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Pradinis</h2>
    <?php
      require_once("db-funkcijos.php");
      $pradinis = getPradinis(1);

    ?>
    <form class="" action="indexUpdated.php" method="get"><br />
      <input type="text" name="title" value="<?php echo $pradinis["title"]?>" placeholder="title"><br />
      <input type="text" name="subtitle" value="<?php echo $pradinis["subtitle"]?>" placeholder="subtitle"><br />
      <textarea name="textas" rows="8" cols="80" value="" placeholder="textas"><?php echo $pradinis["textas"]?></textarea><br />
      <button type="submit" name="button">Atnaujinti</button>
    </form>
  </body>
</html>
