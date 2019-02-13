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
      


// kad veiktu forma
//1.action, kur nusiusti duomenos po submit
//2.turi but method
//3.name, kintamuju pavadinimai
//mygtukas turi turet tipa - submit

        <form method="GET" action= "registracija.php">
            <input type="text" name = "vardas" placeholder = "ivesti varda">
            <input type="text" name = "pavardas" placeholder = "ivesti pavarda">
            <input type="text" name = "telefonas" placeholder = "ivesti telefona">

            <button type="submit" name = "button">Registruotis</button>

        </form>


    <?php

    $preke = ["xxl dviratis",
            "super bike",
            850];
    $prekeAssoc = ["antraste"=>"xxl dviratis", 
                    "aprasymas"=>"super bike", 
                    "kaina"=>850];

    //isvedimas/paemimas
    echo $prekeAssoc["kaina"];
   
    //pakeitimas
    $prekeAssoc["kaina"] = 970;
    
    //idejimas papildomos info
    $prekeAssoc["kiekis"] = 5;
    
    // visko atspausdinimas
    echo "<hr>";
    print_r($prekeAssoc);
    echo "<hr>"; 
    var_dump($prekeAssoc);
    echo "<hr>";
    foreach ($prekeAssoc as $stalciausturinys){
        echo $stalciausturinys . "<br>" ;
    }
   



   
    ?>

      <!-- javascript -->
    
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <script src="./libs/jquery-3.3.1.min.js"></script>
      <script src="./master.js"></script>
      
    </body>
</html>
