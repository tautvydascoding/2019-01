<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- search Bot'ai pvz: google neskanuos musu svetaines -->
         <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>6-php-teorija</title>
        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <!-- !! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
        <div class="container">
          <?php
          $greet = function($name) {
              print("Hello  $name<br>");
          };

          $greet('World');
          $greet('PHP');

          $message = 'Testas11';

          // No "use"
          // $example = function () {
          //     var_dump($message);  // ???
          // };
          // $example();
          // $example = function () use ($message) {
          //     print($message);  // 'Testas11'
          // };
          // $example();
          // // Inherited variable's value is from when the function
          // // is defined, not when called
          // $message = 'world';
          // $example();
          // // Closures can also accept regular arguments
          // $example = function ($arg) use ($message) {
          //     var_dump($arg . ' ' . $message);
          // };
          // $example("hello");
          // $example = function () use (&$message) {
          //     var_dump($message);
          // };
          // $example();
          // // The changed value in the parent scope
          // // is reflected inside the function call
          // $message = 'world';
          // $example();
          function getGreetingFunction() {

            $timeOfDay = "morning";

            return ( function( $name ) use ( &$timeOfDay ) {
              $timeOfDay = ucfirst( $timeOfDay );
              return ( "Good $timeOfDay, $name!" );
            } );
          };

          $greetingFunction = getGreetingFunction();
          echo $greetingFunction( "Fred" ); // Displays "Good Morning, Fred!"

          function myTest() {
              static $x = 0;
              echo $x;
              $x++;
          }

          myTest();
          myTest();
          myTest();
           ?>
        </div> <!-- END CONTAINER -->

        <!-- ------------------------ -->
        <script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript"  src="libs/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias -->
        <script type="text/javascript"  src="main.js">    </script>

    </body>
</html>
