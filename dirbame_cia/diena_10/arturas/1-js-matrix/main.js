/*jshint esversion: 6 */
console.log(   " mano js failas "  );
     // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
let darbuotojas1  = [];
darbuotojas1.push("Jonas", "Jonaitis", 1980, "Inspektorius");
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
let darbuotojas2  = [];
darbuotojas2.push("Ona", "Onute", 1976, "sekretore");
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
let darbuotojas3  = [];
darbuotojas3.push("Kestas", "Kerta", 2001, "pavaduotojas");
let darbuotojas4  = [];
darbuotojas4.push("Romas", "Terta", 2005, "direktorius");
let darbuotojas5  = [];
darbuotojas5.push("Tomas", "Rerta", 1958, "vadybininkas");

// D. sukurti masyva 'visiDarbuotojai'
visiDarbuotojai = [darbuotojas1, darbuotojas2, darbuotojas3, darbuotojas4, darbuotojas5];
// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
for (var i = 0; i < visiDarbuotojai[0].length; i++) {
  document.querySelector("h1").innerHTML += visiDarbuotojai[0][i] + "<br>";
}
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
for (var i = 0; i < visiDarbuotojai.length; i++) {
  document.querySelector("h1").innerHTML += visiDarbuotojai[i][0] + "<br>";
}
// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
for (var i = 0; i < visiDarbuotojai.length; i++) {
  document.querySelector("h1").innerHTML += visiDarbuotojai[i][0] + " ";
  document.querySelector("h1").innerHTML += visiDarbuotojai[i][1] + " ";
  document.querySelector("h1").innerHTML += visiDarbuotojai[i][2] + " ";
  document.querySelector("h1").innerHTML += visiDarbuotojai[i][3] + " ";
  document.querySelector("h1").innerHTML += "<br>";
}
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
for (var i = 0; i < visiDarbuotojai.length; i++) {
  for (var j = 0; j < visiDarbuotojai[0].length; j++) {
    document.querySelector("h1").innerHTML += visiDarbuotojai[i][j] + " ";
  }
  document.querySelector("h1").innerHTML += "<br>";
}// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 1.5) surasti jauniausia darbuotoja
let higherYear = 0;
let highestYear = 0;
let lowestAge = 0;
for (var i = 0; i < visiDarbuotojai.length; i++) {
  for (var j = 0; j < visiDarbuotojai.length; j++) {
    if ((visiDarbuotojai[i][2] != visiDarbuotojai[j][2]) && (visiDarbuotojai[i][2] > visiDarbuotojai[j][2])) {
      higherYear = visiDarbuotojai[i][2];
    }
  }
  if ( highestYear < higherYear) {
     highestYear = higherYear;
     lowestAge = i;
  }
}
document.querySelector("h1").innerHTML += "Jauniausias darbuotojas: ";
for (var i = 0; i < visiDarbuotojai[0].length; i++) {
  document.querySelector("h1").innerHTML += visiDarbuotojai[lowestAge][i] + " ";
}
document.querySelector("h1").innerHTML += "<br>";
// 1.6) surasti seniausia darbuotoja
let lowerYear = 10000;
let lowestYear = 10000;
let highestAge = 0;
for (var i = 0; i < visiDarbuotojai.length; i++) {
  for (var j = 0; j < visiDarbuotojai.length; j++) {
    if ((visiDarbuotojai[i][2] != visiDarbuotojai[j][2]) && (visiDarbuotojai[i][2] < visiDarbuotojai[j][2])) {
      lowerYear = visiDarbuotojai[i][2];
    }
  }
  if ( lowestYear > lowerYear) {
     lowestYear = lowerYear;
     highestAge = i;
  }
}
document.querySelector("h1").innerHTML += "Vyriausias darbuotojas: ";
for (var i = 0; i < visiDarbuotojai[0].length; i++) {
  document.querySelector("h1").innerHTML += visiDarbuotojai[highestAge][i] + " ";
}
document.querySelector("h1").innerHTML += "<br>";
// 1.6) apskaiciuoti darbuotoju amziaus vidurki
let ageSum = 0;
for (var i = 0; i < visiDarbuotojai.length; i++) {
  ageSum += (2019 - visiDarbuotojai[i][2]);
}
let avgAge = ageSum / visiDarbuotojai[0].length;
document.querySelector("h1").innerHTML += "Darbuotoju amziaus vidurkis: " + avgAge + " metai <br>";

// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas
// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
let preke = ["Antraste", "img pavadinimas", "prekes aprasymas", "kaina"];
// B. i masyva visosPrekes, ideti "preke" masyva
let visosPrekes = [];
visosPrekes[0] = preke;
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina
visosPrekes[1] = ["Melynas", "5.jpg", "melynas fotelis", 50];
visosPrekes[2] = ["Baltas", "6.png", "baltas fotelis", 60];
visosPrekes[3] = ["Balionas", "balionas.png", "Juodai baltas balionas", 100];
visosPrekes[4] = ["Melynas", "6.png", "melynas fotelis", 25];
visosPrekes[5] = ["Baltas", "balionas.png", "baltas fotelis", 57.53];
visosPrekes[6] = ["Balionas", "5.jpg", "Juodai baltas balionas", 99.9];
visosPrekes[7] = ["Melynas", "5.jpg", "melynas fotelis", 12];
visosPrekes[8] = ["Baltas", "6.png", "baltas fotelis", 140];
visosPrekes[9] = ["Balionas", "balionas.png", "Juodai baltas balionas", 70.9];
visosPrekes[10] = ["Melynas", "5.jpg", "melynas fotelis", 1.5];
visosPrekes[11] = ["Baltas", "6.png", "baltas fotelis", 100.5];


// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 3.1 surikiuoti prekes pagal kaina didejanciai
prekesPagalKaina = [];
prekesPagalKaina = visosPrekes.slice();

for (var i = 1; i < prekesPagalKaina.length; i++) {
  for (var j = 1; j < prekesPagalKaina.length; j++) {
    if (prekesPagalKaina[i][3] < prekesPagalKaina[j][3]) {
      let temp = prekesPagalKaina[i];
      prekesPagalKaina[i] = prekesPagalKaina[j];
      prekesPagalKaina[j] = temp;
    }
  }
}
// 3.2 atrinkti prekes iki 100 eur
let prekesIki100 = [];
prekesIki100[0] = preke;
for (var i = 1; i < prekesPagalKaina.length; i++) {
  if (prekesPagalKaina[i][3] <= 100) {
    prekesIki100.push(prekesPagalKaina[i]);
  }
}
// sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
// 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer
for (var i = 1; i < prekesPagalKaina.length; i++) {
  prekesPagalKaina[i][3] = Math.round(prekesPagalKaina[i][3]);
}



document.querySelector("div").className += "fluid-container";
let rowNumber = 0;
function getRow() {
  rowNumber++;
  document.querySelector("div.fluid-container").innerHTML += "<div class = 'row  p-" + rowNumber + "'></div>";
}
for (var i = 1; i < visosPrekes.length; i++) {
  if ((i+2) % 3 == 0) {
    getRow();
  }
  document.querySelector("div.p-" + rowNumber).innerHTML += "<div class='col-4 text text-center'><p>" + prekesPagalKaina[i][0] + "</p>" + "<img src='img/" + prekesPagalKaina[i][1] + "' height='150px'>" + "<p>" + prekesPagalKaina[i][2] + "</p><p>" + prekesPagalKaina[i][3] + " €" + "</p></div>";
}
