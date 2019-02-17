<?php
require_once("head.php");
require_once("header.php");
?>

<div class="container-fluid">


  <div class="row ">
    <div class="col aukstis-psl">
      <!-- <h1 class=" mt-5">V2 video</h1> -->
      <h1 class="mt-3 text-center">Paslaugos</h1>
        <?php
          require_once("db-funkcijos.php");
          $paslaugos = getPaslaugos();
        ?>
        <?php while ($paslauga = mysqli_fetch_assoc($paslaugos)) : ?>
        <article class="">
          <h4 class="service-title"><?php echo $paslauga["pav"]?></h4><hr>
          <div class="service hidden">
            <p class=""><?php echo $paslauga["aprasymas"]?></p>
          </div>
        </article>
      <?php endwhile;?>
    </div>
  </div>




</div>



<?php require_once("footer.php"); ?>
