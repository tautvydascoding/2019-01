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

      <h1>testas</h1>
      <?php  // PHP veiks tik siuose skliausteliuose.
          // komentaras
          /* komentaras ilgas su nukelimu i kita eilute
          */

          $a = "Laba diena <br>";
          echo "Viso ,<br>";  //isvedimas, <br> reik rasyt, nes esam html'e ir galioja jo taisykles
          echo $a;    //isvedimas Nr1 su echo
          echo "Tekstas" . " " . "sujungtas (jungtukas yra . TASKAS ) <br>"; // teksto sujungimas vyksta su tasku.
          print("isvedimas su print()"); //isvedimas Nr2 su print
          print_r ($preke); // isvedimas Nr3. spausdina masyvus, objektus ir tekstus
          var_dump ($preke); // isvedimas Nr4. spausdina masyvus, objektus, tekstus ir var TIPA (ar number, ar string ir tt)
          // die ("isvedimas su die()"); //isvedimas Nr5, po sios zinutes nebus vykdomos jokios komandos



          $slaptazodis = "drakonas1"; // php galima saugoti slaptazodzius ir kt info, bet vartotojai ju nematys, nes jis niekur neisvedamas ir neatspausdinamas. Jei nepanaudoji echo, tai ir nesimato. Matys tik kiti programuotojai.

          echo "$slaptazodis <br />";

          $name1 = "Tom";
          $name2 = "Paul";
          echo "Per devynis ezerus ejo $name1 ir sutiko $name2. <br />";
          echo 'Per devynis ezerus ejo $name1 ir sutiko $name2. <br />';

          // primityvus kintamieji
          $lname = "Tomaitis";  //string;
          $age = 21; // Number - integer (sveikas);
          $atlyginimas = 960.50; // Number - float/double (su kableliu);
          $mirtiesData = NULL; // NULL;
          $arDuotiPaskola = false; //boolean;
          // NERA undefined reiksmes PHP kalboje;

          // neprimityvus kintamieji:
          $miestai = ["kaunas", "vilnius", "klaipeda" ]; // array masyvas;
          // $zmogus = new KlasesPavadinimas();  // objektai
          // $failas; // resurso tipo;


        die ("isvedimas su die()"); //isvedimas Nr3, po sios zinutes nebus vykdomos jokios komandos
          echo "Tekstas" . " " . "sujungtas (jungtukas yra . TASKAS ) <br>";
          // po die komandos sio teksto jau neberodys.



       ?>

      <!-- javascript -->
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="libs/jquery.min.js"></script>
      <script type="text/javascript" src="master.js"></script>

      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
