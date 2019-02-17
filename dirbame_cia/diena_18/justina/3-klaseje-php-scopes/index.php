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
        $a = 5; // global scope

        function myTest($x){
        echo $x, "<br />"; // local scope
        }
        myTest($a);
        echo "aaaaa";


// Uzduotis: pakeisti a reiksme:
        $a = 5; // global scope

        // function myTest2($a){
//          $this->a++;   // Local scope. ERROR: this veikia tik class'ese
            // }
            // myTest2();
            // echo "Po pakeitimo: $a";
            // echo "Po pakeitimo:" . $a;
//          echo 'po pakeitimo: $a'; //viengubose kabutese neveikia kintamasis php
// NEPAVYKO.

// 1. =============== globalios reiksmes pakeitimas lokaliam scope =========

          $a = 5; // global scope
          function myTest3(){
            global $a;  // visi veiksmai zemiau eilutese. Global ispeja, kokius kintamuosius norime paimti is globalaus scope'o. Nuo siol ji naudosime
            $a++;
          }
          myTest3();
          echo "Po pakeitimo:" .  $a . "<br />"; // isveda pakeista a=6 (suveike fja a++)

// 2. =============== globalios reiksmes pakeitimas lokaliam scope =========

          $a = 5; // global scope
          function myTest4(&$x){
            $x++;
          }
          myTest4($a);
          echo "Po pakeitimo:" .  $a . "<br />";
          
         ?>





        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
