<?php

include_once 'db_functions.php';

if (isset($_GET['keywords'])) {
    $keywords = $_GET['keywords'];

    $keywords = $prisijungimas->escape_string($_GET['keywords']);

    $query = $prisijungimas->query("
        SELECT aprasymas
        FROM grupes_info
        WHERE aprasymas LIKE '%{$keywords}%'
    ");

    ?>

<div class="result-count">
    Found <?php echo $query->mysql_num_rows; ?> results.
</div>


<?php
}
