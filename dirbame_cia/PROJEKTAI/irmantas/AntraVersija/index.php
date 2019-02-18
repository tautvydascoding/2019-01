<?php
require_once("head.php");
require_once("header.php");
require_once("db-funkcijos.php");
$pradinis = getPradinis(1);
?>

<div class="container-fluid">
  <div class="row ">
    <div class="d-flex col bg-foto">
      <h1 class="position-absolute mt-3"><?php echo $pradinis["title"]?></h1>
      <article class="position-index-article plotis-30 index-article">
      <h2 class="mb-3"><?php echo $pradinis["subtitle"]?></h2>
      <p id="index-p"><?php echo $pradinis["textas"]?></p>
      </article>
    </div>
  </div>
  <div id="header2-image">
    <img class="position-absolute " src="img/v2logoJuodas.png" width="90px" height="90px" alt="V2 logotipas">
  </div>
</div>

<?php require_once("footer.php"); ?>
