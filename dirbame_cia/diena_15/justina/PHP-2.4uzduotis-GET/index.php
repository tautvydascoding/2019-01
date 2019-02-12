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

      <form class="" action="subscribe.php" method="get">
        <input type="text" name="elpastas" placeholder="Jusu el pastas">
        <input type="submit" name="" value="Subscribe">
      </form>

      <?php
      // 1. sukurti index.php
      // 2. parasyti Forma su vienu ivedimo lauku:
      //  elpastas ir mygtuku "subscribe"

      // 2. kai paspaudzia 'subscribe',
      // vartotoja perkelti i subscribe.php faila
      // formoje action='subscribe.php'
      //
      // 3.
      // 3. subscribe.php faile
      // isvesti elpasta
      // 5. subscribe.php faile suprogramuoti tikrinima:
      // kad vartotojui nieko neivedus ismestu pranesima
      // jeigu vartotojas kazka ivede - isvesti jo email i ekrana
      // jeig vartotojas nieko neivede - isvesti pranesima, kad elpastas neivestas




      // PVZ
      // ar masyve egzistuoja stalcius pavadinimu "tekstas"
      // if ( array_key_exists('tekstas', $_GET) ){
      //     $x = $_GET['tekstas'];
      //     echo "stalcius 'tekstas' egzistuoja:" . $x .  "<hr />";
      // } else {
      //     echo "stalciaus tolkiu pavadinimu 'tekstas' nera";
      // }
      //
      // $y;
      // // AR "y" turi kokia nors reiksme
      // if ( isset($y) ) {
      //     echo $y;
      // } else {
      //     echo "y neturi reiksmes <hr />";
      // }

?>

         <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
         <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
