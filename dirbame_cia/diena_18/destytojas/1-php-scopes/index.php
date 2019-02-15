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

        function myTest($x) {
            echo $x; // local scope
        }
        myTest( $a );
// ==================================
        $a = 5;
        function myTest2( ) {
            // $this->a++; // Error: this veiki tik class'ese
        }
        myTest2();
        echo 'po pakeitimo: $a <br>';   // vinegubose kab. neveikia kintamieji
        echo "po pakeitimo: $a  <br>";
        echo "po pakeitimo:" .  $a . "<br>";
//1.============globalios reiksmes pakeitimas local scope==
$a = 5;
function myTest33( ) {
    // global - liepem paimti $a is global'aus scope
     global $a;  // visi veiksmai zemiau eilutese
     $a++;
}
myTest33();
echo "po pakeitimo:" .  $a . " <br>";
//2.============globalios reiksmes pakeitimas local scope==
$a = 5;
function myTest444( &$x ) {
     $x++;
}
myTest444($a);
echo "po pakeitimo:" .  $a . " <br>";

        ?>


        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
