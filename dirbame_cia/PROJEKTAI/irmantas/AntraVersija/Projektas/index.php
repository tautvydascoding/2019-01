<?php
require_once("head.php");
require_once("header.php");
require_once("db-funkcijos.php");
$pradinis = getPradinis(3);
?>

<div class="container-fluid">
  <div class="row ">
    <div class="d-flex col bg-foto">
      <!-- <h1 class=" mt-5">V2 video</h1> -->
      <h1 class="position-absolute mt-5"><?php echo $pradinis["title"]?></h1>
      <article class="align-self-center plotis-30 offset-2">
      <h2><?php echo $pradinis["subtitle"]?></h2>
      <p ><?php echo $pradinis["textas"]?></p>
      </article>
    </div>
  </div>
</div>

<?php require_once("footer.php"); ?>
