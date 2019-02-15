<?php
require_once("head.php");
require_once("header.php");
?>

<div class="container-fluid">


  <div class="row ">
    <div class="col aukstis-kontaktai">
      <!-- <h1 class=" mt-5">V2 video</h1> -->
      <h1 class="mt-5 text-center">Paslaugos</h1>
        <?php
          require_once("db-funkcijos.php");
          $paslaugos = getPaslaugos();
        ?>
        <?php while ($paslauga = mysqli_fetch_assoc($paslaugos)) : ?>
        <article class="">
          <h4><?php echo $paslauga["pav"]?></h4><hr>
          <p><?php echo $paslauga["aprasymas"]?></p>
        </article>
      <?php endwhile;?>
    </div>
  </div>




</div>



<?php require_once("footer.php"); ?>
