
<!-- ============= Appso ivedimo lauke bandziau daryti pasirinkimus, is POSTo nepasiimdavo sios info, maile jos nematydavau, nors title ir www rodydavo, i DB lentele naudingos nuorodos neidedavo, nors be sios kategorijos pridedavo -->

<div class="form-group">
    <label for="nuorodaKategorija">Kategorija:</label>
    <select multiple class="form-control" >

      <?php
        require_once('model/db_apps_kategorija.php');
        $visiGydytojai = getDoctors();
        while ($gydytojas = mysqli_fetch_assoc($visiGydytojai)) {
          ?>
            <option rows="1" name=nuorodaKategorija><?php echo $gydytojas['apps_kategorija']?></option>

      <?php } ?>

    </select>

</div>
