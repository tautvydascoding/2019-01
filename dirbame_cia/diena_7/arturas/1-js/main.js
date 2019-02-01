/*jshint esversion: 6 */
console.log("my js failas");
//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
let vardas1 = "Tomas";
let vardas2 = "Antanas";
if (vardas1 == vardas2) {
  document.querySelector("h1").innerHTML = "Vardai sutampa ";
} else {
  document.querySelector("h1").innerHTML = "Nesutampa <br>";
}
// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
if (vardas1 == "Tomas") {
  document.querySelector("h1").innerHTML += "Sveikas, Tomai <br>";
}
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
if (vardas1 == "Tomas" && vardas2 == "Karolis") {
  document.querySelector("h1").innerHTML += "Jūs, Tomas ir Karolis <br>";
} else {
  document.querySelector("h1").innerHTML += "Jūs nesate Tomas ir Karolis <br>";
}
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
if (vardas1 || vardas2 == "Tomas") {
  document.querySelector("h1").innerHTML += "Vienas is vardu yra Tomas <br>";
}
// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta
// Salygos:
// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"
let age = 14;
if (age < 7 || age >= 65) {
  document.querySelector("h1").innerHTML += "Sokoladiniai zuikuciai 20% nuolaida <br>";
  if (age < 7 ) {
    document.querySelector("h1").innerHTML += "Pliusines varles <br>";
  } else {
    document.querySelector("h1").innerHTML += "kelione i Bristona <br>";
  }
} else if (age < 14) {
  document.querySelector("h1").innerHTML += "Mini telefonai <br>";
} else if (age < 18) {
  document.querySelector("h1").innerHTML += "new Music App <br>";
} else if (age < 24) {
  document.querySelector("h1").innerHTML += "Stok i sauliu sajunga <br>";
} else if (age < 65) {
  document.querySelector("h1").innerHTML += "Pensijos kaupimas - zusiregistruok <br>";
}
// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// susikurti kintamaji 'klietoVardas' - kurio reiksme lyginsime
// kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
let vardas11 = "Tomas";
let vardas12 = "Paulius";
let vardas13 = "Airidas";
let klietoVardas = "Paulius";
if (klietoVardas == vardas11) {
  document.querySelector("h1").innerHTML += "Masinoms 10% nuolaida <br>";
} else if (klietoVardas == vardas12) {
  document.querySelector("h1").innerHTML += "Buitinei technikai  30% nuolaida <br>";
} else {
  document.querySelector("h1").innerHTML += "5% nuolaida kelionems <br>";
}
// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
let klientas1 = "bronze";
let klientas2 = "silver";
let klientas3 = "gold";
let klientoTipas = "gold";
if (klientoTipas == klientas1) {
  document.querySelector("h1").innerHTML += "15% nuolaida <br>";
} else if (klientoTipas == klientas2) {
  document.querySelector("h1").innerHTML += "30% nuolaida <br>";
} else {
  document.querySelector("h1").innerHTML += "5% nuolaida <br>";
}
