<?php
require_once("head.php");
require_once("header.php");
require_once("db-funkcijos.php");
$video1 = getVideo(2);
$video2 = getVideo(1);
$video3 = getVideo(3);
?>
<div class="container-fluid">
  <div class="row ">
    <div class="col d-flex justify-content-center aukstis-psl">
      <div id="bs4-slide-carousel" class="carousel slide" data-ride="carousel"  data-interval="false">
        <ol class="carousel-indicators">
          <li data-target="#bs4-slide-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#bs4-slide-carousel" data-slide-to="1"></li>
          <li data-target="#bs4-slide-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <iframe width="1536" height="639" src="<?php echo $video1["link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="carousel-item">
            <iframe width="1536" height="639" src="<?php echo $video2["link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="carousel-item">
            <iframe width="1536" height="639" src="<?php echo $video3["link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <a class="carousel-control-prev" href="#bs4-slide-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bs4-slide-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
<?php require_once("footer-c.php"); ?>
