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

        <h1> Isijunk Inspect-console (mokomes js) </h1>

        <?php
        $siandiena = "Treciadienis";
        $siandiena = strtolower($siandiena); // pakeiciam kintamaji, kad ivedus net ir didziosiom raidem automatiskai stringa pavers i lowercase ir tada veiks swith kodas.
        $siandiena = trim($siandiena); // kad panaikintu nereikalingai padetus tarpus
        echo "--$siandiena--"; // pasitikrinimui isspausdinti

        switch ($siandiena) {
          case 'pirmadienis': // 'value' yra atvejai visi imanomi
                  echo "Tautvydai, siandien pirmadienis!";
            break;
          case 'antradienis': // 'value' yra atvejai visi imanomi
                  echo "Tautvydai, siandien antradienis!";
            break;
          case 'treciadienis': // 'value' yra atvejai visi imanomi
                  echo "Tautvydai, siandien treciadienis!";
            break;
          case 'ketvirtadienis': // 'value' yra atvejai visi imanomi
                  echo "Tautvydai, siandien ketvirtadienis!";
            break;
          case 'penktadienis': // 'value' yra atvejai visi imanomi
                  echo "Tautvydai, siandien penktadienis!";
            break;

          default:                // bet kokia kita reiksme, kuri neisvardinta auksciau
                  echo "Tautvydai, ilsimes";
            break; // break nutraukia
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
