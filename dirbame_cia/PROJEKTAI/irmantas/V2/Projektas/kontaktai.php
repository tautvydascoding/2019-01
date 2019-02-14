<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.css">
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- mano css zemiausias -->

    </head>
    <body class="position-relative">
      <img class="position-absolute" src="img/v2baltas.png" width="70px" height="70px" alt="V2 logotipas">
      <div class="container-fluid">
        <header class="row bg-dark menu">
          <div class="col menu d-flex align-items-center justify-content-start">
            <i class="d-flex fab fa-facebook-square fa-3x mx-3" ></i>
            <i class="fab fa-instagram fa-3x mx-3"></i>
            <i class="fab fa-youtube fa-3x mx-3"></i>
          </div>
          <div class="col">
            <nav class="menu d-flex align-items-center justify-content-end">
              <ul class="nav">
                <li class="nav-item mx-2"><a class="nav-link" href="#">Pradžia</a></li>
                <li class="nav-item  mx-2"><a class="nav-link" href="#">Paslaugos</a></li>
                <li class="nav-item  mx-2"><a class="nav-link" href="#">Apie mane</a></li>
                <li class="nav-item  mx-2"><a class="nav-link" href="#">Darbai</a></li>
                <li class="nav-item  mx-2"><a class="nav-link" href="#">Kontaktai</a></li>
                <div class="clear-float"></div>
              </ul>
            </nav>
          </div>
        </header>
        <div class="row ">
          <div class="col aukstis-kontaktai">
            <h1 class="mt-5 text-center">Kontaktai</h1>
            <?php require_once("db-funkcijos.php");
              $kontaktai = getContacts();  ?>

              <?php while ($kontaktas = mysqli_fetch_assoc($kontaktai)) : ?>
                <p class="text-center">Susisiekite su manimi: <?php echo $kontaktas["vardas"] . " " . $kontaktas["pavarde"] . " telefono nr.: " . $kontaktas["tel"];?></p>
              <?php endwhile; ?>

              <form class="text-center" action="sentMessage.php" method="post" >
                <input class="mt-3 plotis-35" type="text" name="name" value="" placeholder="Name"><br>
                <input class="mt-3 plotis-35" type="text" name="email" value="" placeholder="Email"><br />
                <input class="mt-3 plotis-35" type="text" name="tel" value="" placeholder="Phone number"><br />
                <textarea class="mt-3 plotis-35" name="message" rows="8" cols="80" placeholder="Message"></textarea><br>
                <button class="mt-3" type="submit" name="">Siųsti</button>
              </form>
          </div>
        </div>
<!-- karusele -->
<!-- karusele -->

        <footer class="row">
          <div class="col d-flex justify-content-center">
            <p class="mt-2">V2 video &copy; 2019. Designed by Irmantas Jasevičius</p>
          </div>
        </footer>
        </div>
      <!-- javascript -->
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="libs/jquery.js">

      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script type="text/javascript" src="master.js"></script>
    </body>
</html>
