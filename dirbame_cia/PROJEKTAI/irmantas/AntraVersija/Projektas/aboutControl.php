<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php require_once("db-funkcijos.php");
    // $about = getAbout(1);
    $aboutAll = getAboutAll();
    $i=0;
  ?>
  <body>
    <?php while ($about = mysqli_fetch_assoc($aboutAll)) : ?>
      <?php if ($i % 3 == 0 && $i != 0) :
        echo "</div> <div class='row'>";
      endif; ?>
      <div class="col-4 border border-dark">
        <h2 class="mx-5"><?php echo $about["vardas"] . " " . $about["pavarde"]?>  <a href="deleteAbout.php?nr=<?php echo $about["id"]?>">Trinti </a> <a href="updateAbout.php?nr=<?php echo $about["id"]?>">Naujinti</a></h2>
          <img src="img/<?php echo $about["foto"] ?>" alt="" width="200px" class="mx-5" >
          <p class=""><?php echo $about["aprasymas"] ?></p>
      </div><hr>
    <?php $i++; endwhile;?>
      <h2>prideti</h2>
      <form class="" action="insertAbout.php" method="post">
        <input type="text" name="vardas" value="" placeholder="vardas"><br>
        <input type="text" name="pavarde" value="" placeholder="pavarde"><br>
        <input type="text" name="foto" value=""  placeholder="foto"><br />
        <textarea name="aprasymas" rows="8" cols="80" placeholder="aprasymas"></textarea><br>
        <button type="submit" name="button">prideti</button>
      </form>
  </body>
</html>
