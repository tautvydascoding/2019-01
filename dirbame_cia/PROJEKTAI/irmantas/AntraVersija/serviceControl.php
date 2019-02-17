<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once("db-funkcijos.php");
      $paslaugos = getPaslaugos();

    ?>
        <!-- <h1 class=" mt-5">V2 video</h1> -->
        <h1 class="">Paslaugos</h1>
          <?php while ($paslauga = mysqli_fetch_assoc($paslaugos)) : ?>
          <article class="">
            <h4><?php echo $paslauga["pav"]?>  <a href="deletedService.php?nr=<?php echo $paslauga["id"]?>">Trinti</a> <a href="updateService.php?nr=<?php echo $paslauga["id"]?>">Naujinti</a></h4><hr>
            <p><?php echo $paslauga["aprasymas"]?></p>
          </article><br>

        <?php endwhile;?>
        <br>
        <h2>Ideti paslauga</h2>
        <form class="" action="insertedService.php" method="post">
          <input type="text" name="pav" value="" placeholder="paslaugos pavadinimas"><br>
          <textarea type="text" name="apr" rows="8" cols="80" placeholder="paslaugos aprasymas"></textarea><br>
          <button type="submit" name="button">Ideti paslauga</button>
        </form>
  </body>
</html>
