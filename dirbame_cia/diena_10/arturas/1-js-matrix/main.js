/*jshint esversion: 6 */
console.log(   " mano js failas "  );
     // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
let darbuotojas1  = [];
darbuotojas1.push("Jonas", "Jonaitis", 1980, "Inspektorius");
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
let darbuotojas2  = [];
darbuotojas2.push("Ona", "Onute", 1980, "sekretore");
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
let darbuotojas3  = [];
darbuotojas3.push("Kestas", "Kerta", 2001, "pavaduotojas");
// D. sukurti masyva 'visiDarbuotojai'
visiDarbuotojai = [darbuotojas1, darbuotojas2, darbuotojas3];
// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
// for (var i = 0; i < visiDarbuotojai[0].length; i++) {
//   document.querySelector("h1").innerHTML += visiDarbuotojai[0][i] + "<br>";
// }
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
// for (var i = 0; i < visiDarbuotojai.length; i++) {
//   document.querySelector("h1").innerHTML += visiDarbuotojai[i][0] + "<br>";
// }
// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
// for (var i = 0; i < visiDarbuotojai.length; i++) {
//   document.querySelector("h1").innerHTML += visiDarbuotojai[i][0] + "<br>";
//   document.querySelector("h1").innerHTML += visiDarbuotojai[i][1] + "<br>";
//   document.querySelector("h1").innerHTML += visiDarbuotojai[i][2] + "<br>";
//   document.querySelector("h1").innerHTML += visiDarbuotojai[i][3] + "<br>";
// }
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
// for (var i = 0; i < visiDarbuotojai.length; i++) {
//   for (var j = 0; j < visiDarbuotojai[0].length; j++) {
//     document.querySelector("h1").innerHTML += visiDarbuotojai[i][j] + "<br>";
//   }
// }
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

document.querySelector("div").className += "fluid-container";
let rowNumber = 0;
function getRow() {
  rowNumber++;
  document.querySelector("div.fluid-container").innerHTML += "<div class = 'row  p-" + rowNumber + "'></div>";
}
for (var i = 1; i < 4; i++) {
  getRow();
  document.querySelector("div.p-1").innerHTML += "<div class='col-4'>" + visosPrekes[i][0] + "<br>" + "<img src='img/" + visosPrekes[i][1] + "' height='150px'>" + "<br>" + visosPrekes[i][2] + "<br>" + visosPrekes[i][3] + " €" + "</div>";
}
