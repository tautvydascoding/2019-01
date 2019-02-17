<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require_once("db-funkcijos.php");
    $nr = $_GET["nr"];
    $video= getVideo($nr);

    ?>
    <h2>Naujinti video</h2>
    <form class="" action="updatedGalery.php" method="get">
      <input type="hidden" name="nr" value="<?php echo $video["id"]?>">
      <input type="text" name="title" value="<?php echo $video["title"]?>" placeholder="title"><br>
      <textarea name="link" rows="2" cols="60" placeholder="link"><?php echo $video["link"]?></textarea>
      <button type="submit" name="button">naujinti</button>
    </form>
  </body>
</html>
