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
        <div class="container-fluid">
            <h1> Isijunk Inspect-console (mokomes js) </h1>


        <?php
        $siandiena = "Pirmadienis";
        $siandiena = trim($siandiena); // panaikina tarpelius priekyje ir gale. ant pass ir username
        $siandiena = strtolower($siandiena); // ant username
        
        switch ($siandiena) {
            case 'pirmadienis':
                echo "siandien pirmadienis";         # code...
                break;
            case 'antradienis':
                echo "siandien antradienis";         # code...
                break;
            case 'treciadienis':
                echo "siandien treciadienis";         
                break;
            case 'ketvirtadienis':
                echo "siandien ketvirtadienis";         
                break;
            case 'penktadienis':
                echo "siandien penktadienis";         
                break;

            
            default:
                echo "ilsekimes";
                break;
        }
         //iterpia viena php i kita
?>
        <div class="container">
            <div class="row">
            <?php
            $kaina = 100;
            $antraste = "Man visai nesalta" ;
            $aprasymas = "Didelis kalnas be medziu";

                for ($i =0; $i < 6 ; $i++): 
                include("prekes.php");
                endfor;
            ?>
            </div>
        </div>


        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
