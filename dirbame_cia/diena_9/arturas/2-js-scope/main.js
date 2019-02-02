/*jshint esversion: 6 */
console.log(   " mano js failas "  );
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja
function printDuomenys() {
  let vardas = "Tomas";
  console.log(vardas);
}
printDuomenys();
//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gaunate kalida ar ne?

// function printDuomenys2() {
//   let vardas = "Tomas";
// }
// console.log(vardas);

//-------------------------------------
 // A) sukurti kintamaji var katinas = "juodas"
var katinas = "juodas";
// B) sukurti f-ja
function koksKatinas() {
  var katinas = "baltas";
// C) sukurti f-jos viduje kintamaji var katinas = "baltas"
// D) atspauzdinti abu f-jos viduje
  console.log("1 katinas:", katinas);
  console.log("2 katinas:", this.katinas);
}
koksKatinas();
// E) atspauzdinti  uz f-jos
console.log("3 katinas:", katinas);
//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"
let xxx = "";
function printAntraste(xxx) {
  document.querySelector("h1").innerHTML += xxx + "<br>";

}
printAntraste("BMW pinga, nes daugeja");
printAntraste("Greik pageres orai");
printAntraste("Vasaros vis saltej");
//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")
function printStraipsnis(x) {
  document.querySelector("body").innerHTML += "<p>" + x + "</p>";
}
printStraipsnis("heheh");
//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",
printAntraste("BMW pinga, nes daugeja");
printStraipsnis("lorem11111111111");
printAntraste("Greik pageres orai");
printStraipsnis("lorem2222222222222h");
printAntraste("Vasaros vis saltej");
printStraipsnis("lorem333333");
