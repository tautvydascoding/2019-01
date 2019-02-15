<?php

require_once("db-functions.php");
print_r( $_GET );
$xx = $_GET['nr'];
deleteDoctor($xx);

?>
<h2>   Beveik istrynem tik liko komanda paleisti...</h2>
