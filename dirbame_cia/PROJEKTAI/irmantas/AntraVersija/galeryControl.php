<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Naujinti video</h2>
    <?php
    require_once("db-funkcijos.php");
    $video1 = getVideo(1);
    $video2 = getVideo(2);
    $video3 = getVideo(3);
    ?>
    <ol>
      <li><a href="updateGalery.php?nr=<?php echo $video1["id"]?>">naujinti</a></li>
      <li><a href="updateGalery.php?nr=<?php echo $video2["id"]?>">naujinti</a></li>
      <li><a href="updateGalery.php?nr=<?php echo $video3["id"]?>">naujinti</a></li>
    </ol>
    <iframe width="560" height="315" src="<?php echo $video1["link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="<?php echo $video2["link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="<?php echo $video3["link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </body>
</html>
