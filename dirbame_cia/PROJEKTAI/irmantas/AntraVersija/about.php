<?php
require_once("head.php");
require_once("header.php");
?>
<?php require_once("db-funkcijos.php");
  // $about = getAbout(1);
  $aboutAll = getAboutAll();
  $i=0;
?>


<div class="container-fluid">
  <div class="row ">
    <div class="col aukstis-psl">
      <h1 class="mt-3 mb-3 text-center">Apie Mane</h1>
      <div class="row">
        <?php while ($about = mysqli_fetch_assoc($aboutAll)) : ?>
          <?php if ($i % 3 == 0 && $i != 0) :
            echo "</div> <div class='row'>";
          endif; ?>
          <div class="col-4 border border-dark">
            <h2 class="mx-5"><?php echo $about["vardas"] . " " . $about["pavarde"]?></h2>
              <img class="d-inline-block " src="img/<?php echo $about["foto"] ?>" alt="" width="200" >
              <p class="d-inline-block w-50"><?php echo $about["aprasymas"] ?></p>
          </div>
        <?php $i++; endwhile;?>
      </div>

    </div>
  </div>
</div>

<?php require_once("footer.php"); ?>
