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
  $rezultatai = mysqli_query(getPrisijungimas(),$manoSQL);
  $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
  return $rezultatai_masyvas;
}
$pirmasGydytojas = getDoctor(3);
print_r($pirmasGydytojas);

function getPatients($nr) {
  $manoSQL = "SELECT * FROM patients WHERE id = $nr";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  $results_array = mysqli_fetch_assoc($results);
  return $results_array;
}
$antrasPacientas = getPatients(2);
echo "<br>id: ".$antrasPacientas[id];
echo "<br>name: ".$antrasPacientas[name];
echo "<br>lname: ".$antrasPacientas[lname];
echo "<br>doctors_id: ".$antrasPacientas[doctors_id];

function getImage($nr) {
  $manoSQL = "SELECT * FROM images WHERE id = $nr";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  $results_array = mysqli_fetch_assoc($results);
  return $results_array;
}
$treciaNuotrauka = getImage(3);
echo "<br>id: ".$treciaNuotrauka[id];
echo "<br>name: ".$treciaNuotrauka[name];
echo "<br>patients_id: ".$treciaNuotrauka[patients_id];
