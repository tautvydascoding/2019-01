/*jshint esversion: 6 */
console.log(   " mano js failasas "  );
// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |
// i html

function piestiEilute(x) {
  let eilute = "";
  for (var i = 0; i < x; i++) {
    eilute = eilute + "-";
  }
  document.querySelector("h1").innerHTML += eilute + "<br>";
}
function spausdintiStulpeli(x) {
  let stulpelis = "|";
  for (var i = 0; i < x; i++) {
    document.querySelector("h1").innerHTML += stulpelis + "<br>";
  }
}
piestiEilute(30);
document.querySelector("h1").innerHTML += "vardas |  pavarde | amzius <br>";
piestiEilute(30);
spausdintiStulpeli(5);

// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

function algaPo10Metu(x) {
  let kiekMenesiu = x * 12;
  let menAtlyginimas = 680;
  let algosPokytis = 2;
  let atlyginimasPoXMetu = 680;
  for (var i = 0; i < kiekMenesiu; i++) {
    algosPokytisEurais = atlyginimasPoXMetu * (algosPokytis / 100);
    atlyginimasPoXMetu = atlyginimasPoXMetu + algosPokytisEurais;
  }
  document.querySelector("h1").innerHTML += "Po "+ x + " metu padidejusi alga: " + atlyginimasPoXMetu + "<br>";
}
algaPo10Metu(10);
