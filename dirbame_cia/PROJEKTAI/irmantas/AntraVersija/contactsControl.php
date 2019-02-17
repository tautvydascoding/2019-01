<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require_once("db-funkcijos.php");
      $kontaktai = getContacts();  ?>

      <?php while ($kontaktas = mysqli_fetch_assoc($kontaktai)) : ?>
        <p class="text-center">Susisiekite su manimi: <?php echo $kontaktas["vardas"] . " " . $kontaktas["pavarde"] . " telefono nr.: " . $kontaktas["tel"];?> <a href="deleteContacts.php?nr=<?php echo $kontaktas["id"]; ?>">Trinti </a> <a href="updateContacts.php?nr=<?php echo $kontaktas["id"]; ?>">Naujinti</a></p>
      <?php endwhile; ?>
      <h2>Prideti kontakta</h2>
      <form class="" action="insertContacts.php" method="get">
        <input type="text" name="vardas" value="" placeholder="vardas"><br>
        <input type="text" name="pavarde" value="" placeholder="pavarde"><br>
        <input type="text" name="tel" value="" placeholder="tel"><br>
        <input type="text" name="email" value="" placeholder="email"><br>
        <button type="submit" name="button">Prideti</button>
      </form>
  </body>
</html>
<!-- <a href="updateContacts.php?nr=<?php echo $kontaktas["id"]?>"> Naujinti</a> -->
