<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>1-php-GET</title>
        <!-- search Bot'ai pvz: google neskanuos musu svetaines -->
         <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <!-- !! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>

        <h1> Isijunk Inspect-console (mokomes js) </h1>
        <form class="" action="registracija.php" method="get">
          <input type="text" name="vardas" placeholder="Jūsų vardas">
          <input type="text" name="pavarde" placeholder="Jūsų pavardė">
          <input type="text" name="telefonas" placeholder="Jūsų telefonas">
          <input type="submit" name="" value="Registruotis">
        </form>

        <?php
          $preke = ["XXL dviratis",
                    "super atsparus, didele|ms apkrovoms",
                    850
                  ];
          $prekeAssoc = ["antraste" => "XXL dviratis",
                          "aprasymas" => "super atsparus, didelems apkrovoms",
                          "kaina" => 850
                        ];
          // isvedimas/paemimas
          echo $prekeAssoc["kaina"];
          // paketimas
          $prekeAssoc["kaina"] = 980;
          // idejimas papildomos info
          $prekeAssoc["kiekis"] = 5;
          echo "<hr>";
          print_r($prekeAssoc);
          echo "<hr>";
          var_dump($prekeAssoc);
          echo "<hr>";
          foreach ($prekeAssoc as $key => $value) {
            echo $key.": ".$value."<br>";
          }
        ?>




        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
