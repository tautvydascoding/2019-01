<?php include ('header.php') ?>

  <!-- ======== prasideda main container white 1200px ===========  -->
  <div class="container">

    <!-- ======== prasideda main ===========  -->

    <div class="row bg_color_pink">
      <div class="col-md">
        <hr>
        <h3 class="font_article text_center">NAUDINGOS NUORODOS APPSAI</h3>
      </div>
    </div>


    <div class="row bg_color_pink flex_justify_center">

      <form class="col-md-6" action="siusti_nuoroda.php" method="post">
        <div class="form-group">
          <label for="nuorodaTitle">Pasidalinkite savo atrastomis įdomiomis ir naudingomis nuorodomis:</label>
          <textarea class="form-control" rows="1" name="nuorodaTitle" placeholder="apps'o ar programos pavadinimas" ></textarea>
        </div>

        <div class="form-group">
          <textarea class="form-control" rows="1" name="nuorodaWww" placeholder="pilnas www adresas" ></textarea>
        </div>


        <div class="form-group">
          <textarea class="form-control" rows="5" name="nuorodaDescription" placeholder="trumpas aprašymas, kam skirta ir kodėl rekomentuojate" ></textarea>
        </div>


      <br>

        <button type="submit" class="btn bg_color_blue color_grey">Siųsti</button>
        <br>
        <br>

      </form>

    </div>

    <div class="row bg_color_pink">
      <div class="col-md">
        <hr>
      </div>
    </div>

    <!-- ======== pasibaigia main row ===========  -->

    <div class="row bg_color_pink flex_justify_center">

        <?php
          require_once('model/db_apps_naudingos_nuorodos.php');
          $visiGydytojai = getDoctors1();
          while ($gydytojas = mysqli_fetch_assoc($visiGydytojai)) {
            ?>

            <div class="card col-md-8 ">
              <div class="card-body">
                <h4 class="card-title"><a href="<?php echo $gydytojas['apps_www'] ?>"target="_blank"><?php echo $gydytojas['apps_title'] ?></a></h4>
                <p class="card-text "><?php echo $gydytojas['apps_description'] ?></p>
                <p class="card-text"><?php echo $gydytojas['apps_date'] ?></p>
              </div>
            </div>

          <?php
          }
          ?>

    </div>
    <div class="row bg_color_pink">
      <div class="col-md">
        <hr>
      </div>
    </div>




  </div>
  <!-- ======== pasibaigia main container white 1200px ===========  -->




<?php include('footer.php') ?>
