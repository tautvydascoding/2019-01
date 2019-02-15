
<?php
  require_once("header.php");
  require_once("db-functions.php"); ?>




  <div class="row ">
    <div class="col">

        <?php

        for ($nr=1; $nr < 6 ; $nr++) {
        $straipsnis = getStraipsnis2( $nr );
        echo  " <a href='straipsniai.php?kintamasis=$nr' > "
                .  $straipsnis['antraste'] . "<br>"
                .  $straipsnis['data'] .   "<br>"
                .  $straipsnis['straipsnis'] . "<br>"
                .  "</a> ";
        }


         ?>
    </div> <!-- end  of juosta col -->
  </div>  <!-- end  of juosta col -->
</div> <!-- end  of container -->





















<?php  require_once("footer.php");
?>
