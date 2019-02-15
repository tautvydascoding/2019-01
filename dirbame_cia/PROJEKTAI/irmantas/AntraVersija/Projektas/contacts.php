<?php
require_once("head.php");
require_once("header.php");
?>
<div class="container-fluid">
  <div class="row ">
    <div class="col aukstis-kontaktai">
      <h1 class="mt-5 text-center">Kontaktai</h1>
      <?php require_once("db-funkcijos.php");
        $kontaktai = getContacts();  ?>

        <?php while ($kontaktas = mysqli_fetch_assoc($kontaktai)) : ?>
          <p class="text-center">Susisiekite su manimi: <?php echo $kontaktas["vardas"] . " " . $kontaktas["pavarde"] . " telefono nr.: " . $kontaktas["tel"];?></p>
        <?php endwhile; ?>

        <form class="text-center" action="sentMessage.php" method="post" >
          <input class="mt-3 plotis-35" type="text" name="name" value="" placeholder="Name"><br>
          <input class="mt-3 plotis-35" type="text" name="email" value="" placeholder="Email"><br />
          <input class="mt-3 plotis-35" type="text" name="tel" value="" placeholder="Phone number"><br />
          <textarea class="mt-3 plotis-35" name="message" rows="8" cols="80" placeholder="Message"></textarea><br>
          <button class="mt-3" type="submit" name="">Siųsti</button>
        </form>
    </div>
  </div>
</div>
<?php require_once("footer.php"); ?>
