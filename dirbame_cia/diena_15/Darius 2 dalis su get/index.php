<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.css">
        <link rel="stylesheet" href="css/master.css">
        <!-- mano css zemiausias -->

    </head>
    <body>
            <h1>Isijunk konsole</h1>
      
<?php
//Reiksmes tikrinimas masyve
//jeigu rado grazina true
// GET - masyvas

if(in_array("aaa", $_GET)) {
    echo "kazkurio stalciaus turinys yra: aaa" ;
}

//ar egzistuoja toks stalcius array

if(array_key_exists('vardas', $_GET)) {
    $x = $_GET['vardas'];
    echo "stalciaus tekstas egzistuoja", $x . "<hr />";
}else{
    echo "nera" . "<hr />";
}


// ar "y" turi kokia nors reiksme

$y;

if (isset($y)) {
    echo $y;
}else{
    echo "neturi reiksmes";
}

?>
   
    

      <!-- javascript -->
    
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <script src="./libs/jquery-3.3.1.min.js"></script>
      <script src="./master.js"></script>
      
    </body>
</html>
