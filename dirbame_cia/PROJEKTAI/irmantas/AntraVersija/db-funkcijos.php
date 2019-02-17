<?php


//Prisijungimas prie //


DEFINE("NAME", "v2video");
DEFINE("PASSWORD", "root"); // arba root
DEFINE("HOST", "localhost");
DEFINE("USER", "root"); // arba root

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME ); //portas dar jeigu keistas MySQL arba Apasche
//ar pavyko prisijungt
// if($prisijungimas) {
//   echo "Prisijungti pavyko";
// } else {
//   echo "Nepavyko prisijungti prie DB" . mysqli_connect_error();
// }

function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}

//kontaktai
function getContact($nr){
    $nr = htmlspecialchars($nr);
    $manoSQL = "SELECT * FROM contacts WHERE id = $nr ";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );

    // print_r( $rezultatai  );
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
    // print_r( $rezultatai_masyvas  );
    return $rezultatai_masyvas;
}

function getContacts($nr=99999){
    $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
    $manoSQL = "SELECT * FROM contacts LIMIT $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    return $rezultatai;
}

function insertContacts($vardas, $pavarde, $tel, $email){
  $vardas = htmlspecialchars(strip_tags($vardas), ENT_QUOTES);
  $pavarde = htmlspecialchars(strip_tags($pavarde), ENT_QUOTES);
  $tel = htmlspecialchars(strip_tags($tel), ENT_QUOTES);
  $email = htmlspecialchars(strip_tags($email), ENT_QUOTES);
  $insertedContacts = "INSERT INTO contacts VALUES (NULL, '$vardas', '$pavarde', '$tel', '$email' )";
  $result = mysqli_query(getPrisijungimas(), $insertedContacts);
  if ($result == true) {
    echo "Pavyko idti";
  } else {
    echo "nepavyko ideti   ".mysqli_error(getPrisijungimas());
  }
}

function deleteContacts($nr) {
  $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
  $deletedContacts = "DELETE FROM contacts WHERE id = $nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $deletedContacts);
  if ($result == true) {
    echo "kontaktas istrinta is DB";
  } else {
    echo "nepavyko istrinti ";
  }
}

function updateContacts($nr, $vardas, $pavarde, $tel, $email){
  $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
  $vardas = htmlspecialchars(strip_tags($vardas), ENT_QUOTES);
  $pavarde = htmlspecialchars(strip_tags($pavarde), ENT_QUOTES);
  $tel = htmlspecialchars(strip_tags($tel), ENT_QUOTES);
  $email = htmlspecialchars(strip_tags($email), ENT_QUOTES);
  $updatedContacts = "UPDATE contacts SET vardas = '$vardas', pavarde = '$pavarde', tel = '$tel', email='$email' WHERE id= $nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $updatedContacts);
  if ($result == true) {
    echo "Atnaujinta";
  } else {
    echo "nepavyko atnaujinti duomenu";
  }
}

//messages
function insertMessage($vardas, $email, $tel, $message){
  $vardas = htmlspecialchars(strip_tags($vardas), ENT_QUOTES);
  $email = htmlspecialchars(strip_tags($email), ENT_QUOTES);
  $tel = htmlspecialchars(strip_tags($tel), ENT_QUOTES);
  $message = htmlspecialchars(strip_tags($message), ENT_QUOTES);
  $messaged = "INSERT INTO messages VALUES (NULL, '$vardas', '$email','$tel','$message')";
  $result = mysqli_query(getPrisijungimas(), $messaged);
  if ($result == true) {
    echo "Naujas zinute:";
  } else {
    echo " " .mysqli_error(getPrisijungimas());
  }
}

//paslaugos

function getPaslauga($nr){
    $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
    $manoSQL = "SELECT * FROM paslaugos WHERE id = $nr ";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );

    // print_r( $rezultatai  );
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
    // print_r( $rezultatai_masyvas  );
    return $rezultatai_masyvas;
}

function getPaslaugos($nr=99999){
    $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
    $manoSQL = "SELECT * FROM paslaugos LIMIT $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    return $rezultatai;
}

function insertPaslauga($pav, $aprasymas){
  $pav = htmlspecialchars(strip_tags($pav), ENT_QUOTES);
  $aprasymas = htmlspecialchars(strip_tags($aprasymas), ENT_QUOTES);
  $insertedPaslauga = "INSERT INTO paslaugos VALUES (NULL, '$pav', '$aprasymas')";
  $result = mysqli_query(getPrisijungimas(), $insertedPaslauga);
  if ($result == true) {
    echo "Pavyko ideti nauja paslauga";
  } else {
    echo "nepavyko ideti naujos palaugos ".mysqli_error(getPrisijungimas());
  }
}

function deletePaslauga($nr) {
  $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
  $deletedPaslauga = "DELETE FROM paslaugos WHERE id = $nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $deletedPaslauga);
  if ($result == true) {
    echo "Paslauga istrinta is DB";
  } else {
    echo "nepavyko istrinti paslaugos";
  }
}

function updatePaslaugos($nr, $title, $textas){
  $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
  $title = htmlspecialchars(strip_tags($title), ENT_QUOTES);
  $textas = htmlspecialchars(strip_tags($textas), ENT_QUOTES);
  $updatedPaslaugos = "UPDATE paslaugos SET pav = '$title', aprasymas = '$textas' WHERE id= $nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $updatedPaslaugos);
  if ($result == true) {
    echo "Atnaujinta";
  } else {
    echo "nepavyko atnaujinti duomenu";
  }
}

//Apie
function getAbout($nr){
    $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
    $manoSQL = "SELECT * FROM about WHERE id = $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
    return $rezultatai_masyvas;
}

function getAboutAll($nr=99999){
    $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
    $manoSQL = "SELECT * FROM about LIMIT $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    return $rezultatai;
}

function updateAbout($nr, $vardas, $pavarde, $foto, $aprasymas){
  $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
  $vardas = htmlspecialchars(strip_tags($vardas), ENT_QUOTES);
  $pavarde = htmlspecialchars(strip_tags($pavarde), ENT_QUOTES);
  $foto = htmlspecialchars(strip_tags($foto), ENT_QUOTES);
  $aprasymas = htmlspecialchars(strip_tags($aprasymas), ENT_QUOTES);
  $updatedAbout = "UPDATE about SET vardas = '$vardas', pavarde = '$pavarde', foto = '$foto', aprasymas = '$aprasymas'  WHERE id= $nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $updatedAbout);
  if ($result == true) {
    echo "Atnaujinta";
  } else {
    echo "nepavyko atnaujinti duomenu";
  }
}

function deleteAbout($nr) {
  $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
  $deletedAbout = "DELETE FROM about WHERE id = $nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $deletedAbout);
  if ($result == true) {
    echo " istrinta is DB";
  } else {
    echo "nepavyko istrinti ";
  }
}

function insertAbout($vardas, $pavarde, $foto, $aprasymas){
  $vardas = htmlspecialchars(strip_tags($vardas), ENT_QUOTES);
  $pavarde = htmlspecialchars(strip_tags($pavarde), ENT_QUOTES);
  $foto = htmlspecialchars(strip_tags($foto), ENT_QUOTES);
  $aprasymas = htmlspecialchars(strip_tags($aprasymas), ENT_QUOTES);
  $insertedAbout = "INSERT INTO about VALUES (NULL, '$vardas', '$pavarde', '$foto', '$aprasymas')";
  $result = mysqli_query(getPrisijungimas(), $insertedAbout);
  if ($result == true) {
    echo "Pavyko ideti";
  } else {
    echo "nepavyko".mysqli_error(getPrisijungimas());
  }
}


//pradinis
function getPradinis($nr){
    $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
    $manoSQL = "SELECT * FROM pradinis WHERE id = $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
    return $rezultatai_masyvas;
}

function updatePradinis($title, $subtitle, $textas){
  $title = htmlspecialchars(strip_tags($title), ENT_QUOTES);
  $subtitle = htmlspecialchars(strip_tags($subtitle), ENT_QUOTES);
  $textas = htmlspecialchars(strip_tags($textas), ENT_QUOTES);
  $updatedPradinis = "UPDATE pradinis SET title = '$title', subtitle = '$subtitle', textas = '$textas' WHERE id=1 LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $updatedPradinis);
  if ($result == true) {
    echo "Atnaujinta";
  } else {
    echo "nepavyko atnaujinti duomenu";
  }
}


//video
function getVideo($nr){
    $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
    $manoSQL = "SELECT * FROM video WHERE id = $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
    return $rezultatai_masyvas;
}

function getVideos($nr=99999){
    $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
    $manoSQL = "SELECT * FROM about LIMIT $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    return $rezultatai;
}

function updateVideo($nr, $title, $link){
  $nr = htmlspecialchars(strip_tags($nr), ENT_QUOTES);
  $title = htmlspecialchars(strip_tags($title), ENT_QUOTES);
  $link = htmlspecialchars(strip_tags($link), ENT_QUOTES);
  $updatedVideo = "UPDATE video SET title = '$title', link = '$link' WHERE id= $nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $updatedVideo);
  if ($result == true) {
    echo "Atnaujinta";
  } else {
    echo "nepavyko atnaujinti duomenu";
  }
}






//neuzdaroma PHP,, ?>
<!-- kad nebutu enter simboliu ir tarp -->
