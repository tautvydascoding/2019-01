<?php require_once("header.php");
require_once("db-functions.php"); ?>


<div class="container-fluid">
  <div class="row straipsniu-centravimas">
    <div class="col mr-20 straipsniu-centravimas">
        <?php

        for ($i=1; $i < 4 ; $i++) {
          echo "<div class='ciklas-str '>";
        $straipsnis = getStraipsnis( $i );
        $foto = getFoto( $i );
        //print_r( $straipsnis );
        //var_dump($straipsnis);

        //print_r($foto);
        printf('<img src="img/%s" width="345px"/>', $foto['fotopav']);
        echo "<br /> ".  $straipsnis['data'] . "<br /> " . "<h4  >" ."<a href='straipsnis.php'>" . $straipsnis['antraste'] . "</a>"  . "</h4>" . "<br /> ";
        echo "</div>";
        }
         ?>
      </div> <!-- uzdaro col -->
    </div> <!-- uzdaro row -->
  </div> <!-- uzdaro container -->

  <div class="container-fluid straipsniu-centravimas">
    <div class="row ">
      <div class="col-md-12 main straipsniu-centravimas">
        <?php

        for ($i=4; $i < 7 ; $i++) {
          echo "<div class='ciklas-str '>";
        $straipsnis = getStraipsnis( $i );
        $foto = getFoto( $i );
        //print_r( $straipsnis );
        //var_dump($straipsnis);

        //print_r($foto);
        printf('<img src="img/%s" width="345px"/>', $foto['fotopav']);
        echo "<br /> ".  $straipsnis['data'] . "<br /> " . "<h4  >" . "<a href='straipsnis.php'>" . $straipsnis['antraste'] . "</a>" . "</h4>" . "<br /> ";
        echo "</div>";
        }
         ?>

        </div> <!-- uzdaro col -->
      </div> <!-- uzdaro row -->
    </div> <!-- uzdaro container -->


<?php  require_once("footer.php");?>
