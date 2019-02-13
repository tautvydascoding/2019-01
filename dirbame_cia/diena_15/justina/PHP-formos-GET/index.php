<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- search Bot'ai pvz: google neskanuos musu svetaines -->
         <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <!-- !! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>


        <!-- 1. index.php faile sukurti HTML form'a naudojant metoda (GET) ir  su ivedimo laukais:
         vardas, pavarde, telefonas, mygtukas 'registruotis' -->

         <form class="" action="registracija.php" method="get">
           <input type="text" name="vardas" placeholder="Jusu vardas">
           <input type="text" name="pavarde" placeholder="Jusu pavarde">
           <input type="text" name="telefonas" placeholder="Jusu telefonas">

           <input type="submit" name="" value="Registruotis">
           <!-- ARBA -->
           <button type="submit" name="button">Registruotis</button>

         </form>


        <!-- 2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila (formoje action='registracija.php') -->

        <!-- 3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
        pvz.:
        print_r( $_GET);


        // PASIBANDYTI PAPILDOMAI
        pvz.: print_r( $GLOBALS)

        // UZDUOTIS
        // pasisveikinti su katik uzsiregistravusius zmogumi ir
        // graziai atspausdinti uzsiregistravusio zmoguas duomenis -->






        <?php
            $preke = ["XXL dviratis",
                    "Super atsparus ir labai geras",
                    850
                      ];
          // kad nesusimaisyt, kur kas ideta masyve, susikuriam asociatyvu masyva su stalciu pavadinimais.
            $prekeAssoc = ["antraste"=> "XXL dviratis",
                          "aprasymas"=> "Super atsparus ir labai geras",
                          "kaina"=> 850
                        ];
          // isvedimas/paemimas:
          echo $prekeAssoc["kaina"];

          //pakeitimas:
          $prekeAssoc["kaina"] = 970;

          //idejimas papildomos info:
          $prekeAssoc["kiekis"] = 5;

          //visko atspausdinimas:
          echo "<hr />"; // <hr /> linija kaip skirtukas
          print_r($prekeAssoc);
          echo "<hr />";
          var_dump($prekeAssoc); //var_dump atspausdina ir duomenu tipus
          echo "<hr />";
          foreach ($prekeAssoc as $stalciausTurinys) {
            echo $stalciausTurinys . "<br />"; // taskas sujungia daug stringu
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
