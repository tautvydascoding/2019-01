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
      <h2>Registracija</h2>
      <form class="mr-5" action="naujasGydytojas.php" method="get">
        <input type="text" name="gydytojoVardas" value="" placeholder="Gydytojo vardas">
        <input type="text" name="gydytojoPavarde" value="" placeholder="Gydytojo pavarde">
        <input type="submit" name="" value="Uzregistruoti sistemoje">
      </form>
      <h2>Trinti</h2>
      <form class="" action="trintiGydytoja.php" method="get">
        <input type="text" name="tId" value="" placeholder="Gydytojo nr.">
        <input type="submit" name="" value="trinti is sistemos">
      </form>
      <h2>Gydytoju sarasas</h2>
      <form class="" action="gydytojuSarasas.php" method="post">
        <button type="submit" name="button">Gauti gydytoju sarasa</button>
      </form>
      <!-- javascript -->

      <script type="text/javascript" src="master.js"></script>
      <script type="text/javascript" href="libs/bootstrap-4/js/bootstrap.min.js"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    </body>
</html>
