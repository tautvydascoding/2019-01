<?php
DEFINE("NAME", "hospital2");
DEFINE("PASSWORD", "slaptazodis");
DEFINE("HOST", "localhost");
DEFINE("USER", "arturas");

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME);

if ($prisijungimas) {
  echo "Prisijungti prie DB pavyko.";
} else {
  echo "Nepavyko". mysqli_connect_error();
}
function getPrisijungimas () {
  global $prisijungimas;
  return $prisijungimas;
}
function getDoctor($nr) {
  $manoSQL = "SELECT * FROM doctors WHERE id = $nr";
  $rezultatai = mysqli_query(getPrisijungimas (),$manoSQL);
  $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
  return $rezultatai_masyvas;
}
$pirmasGydytojas = getDoctor(3);
print_r($pirmasGydytojas);
