
<?php
  require_once("header.php");
  require_once("db-functions.php"); ?>

<!-- straipsnis -->
<div class="container straipsnio-kont">
<p> <a class="" href="straipsniai.php"> Grįžti į sąrašą</a></p>
  <div class="row">
    <div class="col-md-12 paraste ">

        <?php
                $nr = $_GET['xx'];
                $i = $_GET['xx'];

                $straipsnis = getStraipsnis2( $nr );
                $foto = getFoto( $i );

                echo   "<h5 class='mx-auto mt-15 str-antr' style='width: 410px;' >" .  $straipsnis['antraste'] . "</h5>" . "<br>";

                echo   "<div class='mx-auto' style='width: 710px;'>";
                printf  ('<img src="img/%s" />', $foto['fotopav']);
                echo   "</div>";

                echo "<p class='mx-auto' style='width: 150px;' >" .  $straipsnis['data']  . "</p>" . "<br>"
                       .  "<p class='mx-auto tekstas' style='width: 600px;' >" . $straipsnis['straipsnis'] . "</p>"  . "<br>"
                       ;
         ?>
       </div> <!--end  of  col -->
     </div>   <!--end  of  col -->
  <p> <a class="" href="straipsniai.php"> Grįžti į sąrašą</a></p>
</div> <!-- end  of container -->

<!-- komentaro forma -->
<section class="container">
      <div class="rows forma">
        <div class="col-md-6 susisiekite  "> <h5 class="">
          Palikite komentarą </h5>
        </div>
      </div>
      <form class="" action="komentaras.php" method="get">
          <div class="row forma">
               <div class="col-md-3">
                 <input type="text" class="form-control" name="autorius" placeholder="Vardas *">
               </div>

               <div class="col-md-3 ">
                 <input type="email" class="form-control"  name="email" placeholder="El. paštas *">
               </div>
          </div>
                <br>
        <p></p>
            <div class="row forma">
              <div class="form-group col-md-6 ">
                <label for="">Įveskite savo komentarą *</label>
                <textarea   name="komentaras"  class="form-control" style="height:200px"></textarea>
                <p>* Laukeliai pažymėti žvaigždute - privalomi.</p>
              </div>
            </div>

            <div class="row forma">
              <div class="col-md-6">
                <button type="submit" class="btn btn-outline-success" name="button">Komentuoti!</button>
              </div>
            </div>
        </form>
</section>

<?php  require_once("footer.php");
?>
