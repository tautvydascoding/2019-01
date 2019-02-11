
<?php
require_once('db-functions.php');

// uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
$numeris = 4;
$gydytojas = getDoctors( $numeris);

//echo $gydytojas["name"] .  $gydytojas['lname'] ;
echo "<p>" .  $gydytojas["name"] .  $gydytojas["lname"] . "</p>";


// uzduotis 3.1: atspausdinti visas gydytoju pavardes , kaip list item "ul li"
echo "<ul>";
for ($i=1; $i < 6 ; $i++) {
$gydytojas = getDoctors( $i );
echo  "<li>" .  $gydytojas['name'] .  $gydytojas['lname'] . "</li>";
}
echo "</ul>";

// uzduotis 3.2: patobulinti 'uzduotis3',

//echo "<h2> Patobulinta 3 uzduotis </h2>";

echo "<ul>";
for ($i=1; $i < 6 ; $i++) {
$gydytojas = getDoctors( $i );
echo  "<li> <a href='gydytojai.php?kintamasis=$i' > "
        .  $gydytojas['name']
        .  "</a> </li>";
}
echo "</ul>";


?>
