<?php include('header.php') ?>

  <!-- ======== prasideda main container white 1200px ===========  -->
  <div class="container">

    <!-- ======== prasideda main ===========  -->
    <div class="row bg_color_pink">
      <div class="col-md">
        <hr>
        <h3 class="font_article text_center">NAUDINGOS NUORODOS</h3>
      </div>
    </div>



    <div class="row bg_color_grey">

        <?php
          require_once('model/db_naudingos_nuorodos.php');
          $visiGydytojai = getDoctors();
          while ($gydytojas = mysqli_fetch_assoc($visiGydytojai)) {
            ?>

          <div class="card col-md-3" style="">
            <img class="card-img-top" src="<?php echo $gydytojas['foto'] ?>" alt="<?php echo $gydytojas['foto_alt'] ?>" style="width:100%">
            <div class="card-body">
              <h4 class="card-title text_center"><?php echo $gydytojas['link_antraste'] ?></h4>
              <p class="card-text text_center"><?php echo $gydytojas['link_aprasymas'] ?></p>
              <a href="<?php echo $gydytojas['link_www'] ?>" class="btn bg_color_blue color_grey" name="spalva">Skaitykite</a>
            </div>
          </div>
          <br>

          <?php
          }
          ?>

    </div>

  </div>
  <!-- ======== pasibaigia main container white 1200px ===========  -->



<?php include('footer.php') ?>
