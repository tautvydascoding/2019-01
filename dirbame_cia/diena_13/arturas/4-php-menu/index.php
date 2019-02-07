<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- search Bot'ai pvz: google neskanuos musu svetaines -->
         <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>4-php-menu</title>
        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <!-- !! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
        <div class="container">
          <?php
          $menu = ["Home", "About", "Gallery", "Contact", "Blog"];
           ?>
           <nav>
             <ul>
               <?php
                for ($i=0; $i < count($menu); $i++) :
                  echo "<li>$menu[$i]</li>";
                endfor;
                foreach ($menu as $value) :
                  echo "<li>$value</li>";
                endforeach;
                ?>
             </ul>
           </nav>
           <div class='row'>
             <?php
              $pics = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.png"];
              for ($i=0; $i < count($pics); $i++) {
                if ($i % 3 == 0 && $i != 0) :
                  echo "</div> <div class='row'>";
                endif;
                echo "<div class='col'><img class='img-fluid' src='img/".$pics[$i]."' alt=''></div>";
              }
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
