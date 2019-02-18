<?php require_once("header.php");
require_once("db-functions.php"); ?>

<div class="container container-straipsniai">
  <div class="row centruoja-straipsn">
    <div class="col-md-12 ">
      <h5 class="irasai ">NAUJAUSI ĮRAŠAI</h5>
        <?php
          for ($i=1; $i < 8 ; $i++) {
            echo "<div class='ciklas-str centr-straipsn'>";

              $straipsnis = getStraipsnis( $i );
              $foto = getFoto( $i );

              printf('<img src="img/%s" width="300px"/>', $foto['fotopav']);
              echo "<br/>".  $straipsnis['data'] . "<br/>"
              . "<h5>" . "<a href='straipsnis.php?xx=$i'>"
              . $straipsnis['antraste'] . "</a>" . "</h5>" ;
             echo "</div>";
           }
         ?>
         <span class="stop-float"></span>
      </div> <!-- uzdaro col -->
    </div> <!-- uzdaro row -->
  </div> <!-- uzdaro container -->

<?php  require_once("footer.php");?>
