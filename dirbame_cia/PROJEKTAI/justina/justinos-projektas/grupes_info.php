<?php include('header.php') ?>

  <!-- ======== prasideda main container white 1200px ===========  -->
  <div class="container">

    <!-- ======== prasideda main ===========  -->

    <div class="row bg_color_pink">

      <div class="col-md ">
        <?php
          require_once('model/db_functions_grupes_info.php');
          $visiGydytojai = getDoctors();
          while ($gydytojas = mysqli_fetch_assoc($visiGydytojai)) {
            ?>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"><?php echo $gydytojas['antraste']?></h4>
                <p class="card-text"><?php echo $gydytojas['aprasymas'] ?></p>
                <p class="card-text "><?php echo $gydytojas['data'] ?></p>
              </div>
            </div>
            <?php echo "<br />" ?>
          <?php
          }
          ?>
      </div>


    </div>

    <!-- ======== pasibaigia main row ===========  -->

  </div>
  <!-- ======== pasibaigia main container white 1200px ===========  -->




<?php include('footer.php') ?>
