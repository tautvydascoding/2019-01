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
      <form class="" action="index.html" method="post">
        <input type="text" name="vardas" value="" placeholder="vardas">
        <input type="text" name="pavarde" value="" placeholder="pavarde">
        <input type="text" name="tel" value="telefonas" placeholder="tefono nr.">
        <button type="submit" name="registracija" action="'registracija.php'">Registruotis</button>
      </form>



      <?php
        $preke = ["XXL dviratis", "super atsparus,skirtas didelems apkrovoms", 850];
        $prekeAssoc = ["antraste"=>"XXL dviratis",
                      "aprasymas"=> "super atsparus,skirtas didelems apkrovoms",
                      "kaina"=> 850
      ];
      //isvedimas
      echo $prekeAssoc["kaina"] . "<br>";
      //pakeitimas
      $prekeAssoc["kaina"] = 950;
      //idejimas papildomaai
      $prekeAssoc["kiekis"] = 5;
      // print_r($prekeAssoc);
      foreach($prekeAssoc as $stalciausturinys) {
        echo $stalciausturinys . "<br>";
      }
      ?>
      <!-- javascript -->
      <script type="text/javascript" src="master.js"></script>
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
