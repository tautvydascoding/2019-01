console.log(   " mano js failas "  );
//==============TEORIJA ++ / -- ==========
    var x = 10;
    x = x + 3;  // x = 13
    x += 3;     // tas pats kad x = x + 3;
    x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

for (var i = 0; i < 50; i++) {
console.log("Azuolas", i);
}

  // isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

document.write("<h3>'azuolas </h3>");
document.querySelector('article').innerHTML += ("<h2> azuolas <h2>");


for (var i = 0; i < 50; i++) {
  console.log("azuolelis", i);
}


  // 1.2 UZDUOTIS
  // HTML faile susikurti article element (query selectoriu panaudot)
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

for (var i = 0; i < 50; i++) {
  document.querySelector('article').innerHTML += "<h2> Hola <h2>";
}

// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba


for (var i = 0; i < 6; i++) {
  let elementas1 = "Liepa"
  document.querySelector( 'ul' ).innerHTML += "<li>" + elementas1 + "</li>";
}
// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandasntis automatiskai)
for (var i = 0; i < 10; i++) {
document.querySelector('header').innerHTML += "<p>" + "aprasymas" + " " + i + "</p>";

}

// 1.5 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <ul> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)

for (var i = 0; i < 6; i++) {
document.querySelector( 'ul' ).innerHTML += "<li>" + "elementas" + " "+ i + "</li>"
}

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function getPrintX(xx){

  document.querySelector('body').innerHTML += "<h2>" + xx + " <h2>";

}
getPrintX("medis");
getPrintX("lapas");
getPrintX("berzas");
getPrintX("liepa");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for (var i = 0; i < 100; i++) {
  getPrintX("medis");
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila
function getPrintX1(){
  let image = '<C:/Users/l3dot/Documents/course/2019-01/resursai/images/2.jpg" alt="">';
  document.querySelector('div').innerHTML += image;
}

for (var i = 0; i < 12; i++) {
  getPrintX1();
}

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
// funcion piestiEilute20() {
// let eilute = "";
// for (var i = 0; i < 20; i++) {
//   eilute = eilute + "-";
// }
//   console.log(eilute);
//
//
// }
// piestiEilute(20);



// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |



// // advance
// // 5 UZDUOTIS
// // sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur) nuo esamos algos.
// let kiekMenesiu = 10 * 12;
// let menAtlyginimas = 680;
// let algosPokytis = 2;  // 1%
//
// let algosPokytisPinigais = menAtlyginimas * algosPokytis / 100;
// // console.log("1% nuo 680:", algosPokytisPiigais); <--- patestuot ar veikia formule
// // algosPokytisPinigais = menAtlyginimas * algosPokytis / 100;
// // menAtlyginimas += algosPokytisPinigais; // ATLYGINIMAS PO PADIDEJIMO
//
// menAtlyginimas += algosPokytisPinigais;
// for (var i = 0; i < 120; i++) {
//   algosPokytisPinigais = menAtlyginimas * algosPokytis / 100;
//   menAtlyginimas += algosPokytisPinigais;
// }
// console.log("po 10 metu atlyginimas:", menAtlyginimas );







// for (var i = 0; i < 120.length; i++) {
//   120[i]
// }



// ==============SCSS============================

//========= local/global or Frog/Garden =======
