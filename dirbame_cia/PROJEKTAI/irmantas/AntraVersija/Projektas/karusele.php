<?php
require_once("head.php");
require_once("header.php");
require_once("db-funkcijos.php");
// $video1 = getVideo(2);
// $video2 = getVideo(1);
// $video3 = getVideo(3);
$videos = getVideos();
$videoNum = 0;
?>
<div class="container">


  <div class="row ">
    <div class="col aukstis-kontaktai">



      <div id="bs4-slide-carousel" class="carousel slide" data-ride="carousel" >


        <ol class="carousel-indicators">
          <li data-target="#bs4-slide-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#bs4-slide-carousel" data-slide-to="1"></li>
          <li data-target="#bs4-slide-carousel" data-slide-to="2"></li>
        </ol>



        <div class="carousel-inner">
          <?php while ($video = mysqli_fetch_assoc($videos)) : ?>
            <?php if ($videoNum = 0) : ?>
              <div class="carousel-item active">
                <iframe width="1120" height="630" src="<?php echo $video["link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            <?php else :?>
              <div class="carousel-item active">
                <iframe width="1120" height="630" src="<?php echo $video["link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            <?php endif;?>
          <?php endwhile; ?>
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
