<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <!-- galimos klaidos -->
  <!-- blogas kelias iki failo -->
  <!-- "/" ne i ta puse -->
  <!-- neuzdarete ">" -->
  <link rel="stylesheet" href="css/master.css">
  <!-- !!!! VISADA MANO CSS failas pats zemiausias -->
</head>

<body>

  <!-- ======== prasideda header container fluid blue ===========  -->

  <header class="container-fluid bg_color_blue">
    <div class="container">
      <div class="row aukstis_130 bg_color_blue ">
        <div class="col-md-2">
        </div>
        <div class="col-md auto_height flex_align_items_center">
          <img src="img/vm-logo-rausvas.png" class="logo_height" alt="Verslios mamos logo">
        </div>
  <!-- ============ social media ikoneles======================= -->
        <div class="col-md-2 flex_icons">
          <i class="fab fa-linkedin fa-2x color_white_opac"></i>
          <i class="fab fa-instagram fa-2x color_white_opac"></i>
          <a href="https://www.facebook.com/groups/262341623976083/"><i class="fab fa-facebook-square fa-2x color_white_opac"></i></a>
        </div>
      </div>
    </div>


  </header>
  <!-- ======== pasibaigia header container fluid blue ===========  -->

  <!-- ======== prasideda meniu container pink 1200px ===========  -->

  <div class="container">
    <div class="row">
      <div class="col-md bg_color_pink">
        <!-- ======== prasideda meniu ===========  -->
        <nav class="navbar navbar-expand-lg navbar-light bg_color_pink">
          <a class="navbar-brand text_center" href="index.php">VERSLIOS<br />MAMOS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link text_center" href="grupes_info.php">Apie VM<br />facebook grupę</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text_center" href="naudingos_nuorodos.php">Naudingos<br />nuorodos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text_center" href="kontaktu_galerija.php">Kontaktų<br />galerija</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text_center" href="renginiai.php">Renginiai<br />grupės narėms</a>
              </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Įveskite ieškomą žodį..." aria-label="Search">
              <button class="btn bg_color_blue color_grey my-2 my-sm-0" type="submit">Paieška</button>
            </form>
          </div>
        </nav>

        <!-- ======== pasibaigia meniu ===========  -->
      </div>
    </div>
  </div>
  <!-- ======== pasibaigia meniu container pink 1200px ===========  -->
