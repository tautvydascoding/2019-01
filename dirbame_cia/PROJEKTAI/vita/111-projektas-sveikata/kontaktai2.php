<?php
  require_once("header.php");
//  require("siusti-klausima.php"); ?>




<section class="container  ">
  <div class="row forma">
    <div class="col-md-3 ">
      <p class="">Jūsų žinutė sėkmingai išsiųsta.</p>
    </div>
  </div>
<div class="rows forma">
  <div class="col-md-8 susisiekite  "> <p class="">
    Turite klausimų? Užpildykite žemiau esančią užklausos formą ir sulaukusi jūsų užklausos  atsakysiu kaip galima greičiau. Taip pat man galite rašyti elektroniniu paštu info@geraspastas.lt </p>
  </div>
</div>
<form class="" action="siusti-klausima.php" method="post">
    <div class="row forma">
         <div class="col-md-4">
           <input type="text" class="form-control" name="vardas" placeholder="Vardas *">
         </div>

         <div class="col-md-4 ">
           <input type="text" class="form-control"  name="pavarde" placeholder="Pavardė *">
         </div>
    </div>
          <br>
    <div class="form-group row forma">
      <div class="col-md-8 ">
        <input type="email" class="form-control " id="inputEmail3" name="pastas" placeholder="El. paštas *">
      </div>
    </div>
  <p></p>
      <div class="row forma">
        <div class="form-group col-md-8 ">
          <label for="">Įveskite savo žinutę *</label>
          <textarea   name="klausimas"  class="form-control" style="height:200px"></textarea>
          <p>* Laukeliai pažymėti žvaigždute - privalomi.</p>
        </div>
      </div>

      <div class="row forma">
        <div class="col-md-8">
          <button type="submit" class="btn btn-outline-success" name="button">Siųsti</button>
        </div>
      </div>
  </form>
</section>


<?php require("footer.php");

?>
