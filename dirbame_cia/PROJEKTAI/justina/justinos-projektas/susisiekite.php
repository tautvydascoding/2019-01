<?php include ('header.php') ?>

  <!-- ======== prasideda main container white 1200px ===========  -->
  <div class="container">

    <!-- ======== prasideda main ===========  -->
    <div class="row bg_color_pink">
      <div class="col-md">
        <hr>
        <h3 class="font_article text_center">SUSISIEKITE</h3>
      </div>
    </div>

    <div class="row bg_color_pink flex_justify_center">


      <form class="col-md-6" action="siusti_laiska.php" method="post">
        <div class="form-group ">
          <input class="form-control" rows="1" name="klientoVardas" placeholder="Jūsų vardas"></input>
        </div>

        <div class="form-group ">
          <input class="form-control email" rows="1" name="klientoPastas" placeholder="Jūsų el.paštas"></input>
        </div>

        <div class="form-group ">
          <input class="form-control" rows="1" name="klientoTema" placeholder="Klausimo tema"></input>
        </div>


        <div class="form-group">
          <textarea class="form-control" rows="8" name="klientoKlausimas" placeholder="Parašykite savo klausimą" ></textarea>
        </div>

        <br>

        <button type="submit" class="btn bg_color_blue color_grey">Klauskite</button>
        <br>
        <br>

      </form>

    </div>

    <!-- ======== pasibaigia main row ===========  -->

  </div>
  <!-- ======== pasibaigia main container white 1200px ===========  -->




<?php include('footer.php') ?>
