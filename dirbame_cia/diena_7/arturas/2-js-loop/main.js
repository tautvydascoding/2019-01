/*jshint esversion: 6 */
console.log("my js failas");
// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
var i;
for (var i = 0; i < 50; i++) {
  console.log("Azuolas");
}
// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
document.querySelector("body").innerHTML += "<h3> Azuolas </h3>";
// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
document.querySelector("body").innerHTML += "<article></article>";
var i;
for (var i = 0; i < 50; i++) {
  document.querySelector("article").innerHTML += "<h2> Azuolas</h2>";
}
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)
function printX(xx) {
    document.querySelector("body").innerHTML += xx + "<br>";
}
// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
let xx = "ivestas tekstas";
var i;
for (var i = 0; i < 100; i++) {
  printX(xx);
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila
var i;
let img = '<img src="whale2.jpg" alt="Whale">';
for (var i = 0; i < 12; i++) {
  printX(img);
}
