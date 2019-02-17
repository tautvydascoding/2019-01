<?php
require_once("head.php");
require_once("header.php");
?>
<div class="container-fluid">
  <div class="row ">
    <div class="col aukstis-psl">
      <h1 class="mt-3 text-center">Kontaktai</h1>
      <?php require_once("db-funkcijos.php");
        $kontaktai = getContacts();  ?>

        <?php while ($kontaktas = mysqli_fetch_assoc($kontaktai)) : ?>
          <p class="text-center">Susisiekite su manimi: <?php echo $kontaktas["vardas"] . " " . $kontaktas["pavarde"] . " telefono nr.: " . $kontaktas["tel"];?></p>
        <?php endwhile; ?>

        <form class="text-center" >
          <input id="nameMessage" class="mt-3 plotis-35" type="text" name="nameMessage" value="" placeholder="Name"><br>
          <input id="emailMessage" class="mt-3 plotis-35" type="email" name="emailMessage" value="" placeholder="Email"><br />
          <input id="telMessage" class="mt-3 plotis-35" type="text" name="telMessage" value="" placeholder="Phone number"><br />
          <textarea id="messageMessage" class="mt-3 plotis-35" name="messageMessage" rows="8" cols="80" placeholder="Message"></textarea><br>
          <div class="">
            <?php if (isset($_GET['emailMessage']))
            {
              if ($_GET['emailMessage'] != null){
              echo "<p >Žinutė išsiųsta</p>";}
            }
            ?>
          </div>
          <button onclick="sendMessage()" class=" btn btn-warning" >Siųsti</button>
        </form>
    </div>
  </div>
</div>
<?php require_once("footer.php"); ?>
