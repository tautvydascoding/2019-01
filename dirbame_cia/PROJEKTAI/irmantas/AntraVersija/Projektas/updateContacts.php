<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Naujinti kontakta</h2>
    <?php
    require_once("db-funkcijos.php");
      $nr = $_GET["nr"];
      $kontaktas = getContact($nr);
    ?>

    <form class="" action="updatedContacts.php" method="get">
      <input type="hidden" name="nr" value="<?php echo $kontaktas["id"]?>" placeholder=""><br>
      <input type="text" name="vardas" value="<?php echo $kontaktas["vardas"]?>" placeholder="vardas"><br>
      <input type="text" name="pavarde" value="<?php echo $kontaktas["pavarde"]?>" placeholder="pavarde"><br>
      <input type="text" name="tel" value="<?php echo $kontaktas["tel"]?>" placeholder="tel"><br>
      <input type="text" name="email" value="<?php echo $kontaktas["email"]?>" placeholder="email"><br>
      <button type="submit" name="button">naujinti</button>
    </form>
  </body>
</html>
