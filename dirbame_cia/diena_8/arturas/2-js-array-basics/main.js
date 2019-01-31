/*jshint esversion: 6 */
console.log(   " mano js failasas "  );
console.warn("ispejimas");
console.error("raudonas tekstas");

// 1.1 sukurti tuscia masyva "prekiautojai"
let prekiautojai = [];
// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
prekiautojai[0] = "senukai";
prekiautojai[1] = "mokivezi";
prekiautojai[2] = "ermitazas";
prekiautojai[3] = "depo";
// 1.3 isvesti i console/ekrana "prekiautojai" masyva
console.log(prekiautojai);
document.querySelector("h1").innerHTML += prekiautojai + "<br>";
// 2 pervadinti pirma stalciu pvz + "ir KO"
prekiautojai[1] = prekiautojai[1] + " ir KO";
console.log(prekiautojai);
document.querySelector("h1").innerHTML += prekiautojai + "<br>";
// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
  // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
let antras = prekiautojai[2];
prekiautojai[2] = prekiautojai[3];
prekiautojai[3] = antras;
document.querySelector("h1").innerHTML += prekiautojai + "<br>";
	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
function sukeistiMasyvo2Elementus(x, y) {
  let laikinas = prekiautojai[x];
  prekiautojai[x] = prekiautojai[y];
  prekiautojai[y] = laikinas;
}
sukeistiMasyvo2Elementus(0, 3);
document.querySelector("h1").innerHTML += prekiautojai + "<br>";
