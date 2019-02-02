console.log(   " mano js failas "  );
// =================FOR intro  ======================


//==============TEORIJA ++ / -- ==========
//    var x = 10;
//    x = x + 3;  // x = 13
//    x += 3;     // tas pats kad x = x + 3;
//    x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

for (let i = 0; i < 50; i++) {
  console.log("Azuolas"); // jei rasysim console.log("Azuolas", i); tai consoleje parodys visus 50 eiluciu Azuolas 0, Azuolas 1, Azuolas 2 ir t.t.
}

  // 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

document.write(" <h3>Azuolas h3</h3>");

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba. HTML faile susikurti <article> elementa.

// document.querySelector("article").innerHTML = ("<h2>Azuolas h2</h2>");

for (let i = 0; i < 50; i++) {
document.querySelector("article").innerHTML += ("<h2>Azuolas h2</h2>");
}

// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba

for (let i = 0; i < 6; i++) {
  document.querySelector("ul").innerHTML += ("<li>elementas1</li>");
}

// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandasntis automatiskai)

for (let i = 0; i < 10; i++) {
  document.querySelector("header").innerHTML += ("<p>" + "Aprasymas" + " " + i + "</p>"); //
}

// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)

for (var i = 1; i < 7; i++) {
  document.querySelector("div").innerHTML += ("<li>" + "elementas" + " "+ i + "</li>");
}


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function printX(xx) {   //PrintX laukia, kad paduotum jam reiksme xx
  document.write(xx);   //cia komanda, kad isspausdintu i narsykles langa
}
printX("menulis");        //cia FUNKCIJOS ISKVIETIMAS, be jo neveiks funkcija. Ir cia paduodama xx reiksme, kuri gali kisti (saule, menulis ir t.t.)

function printX1(x) {
  let tekstas = "<h2>" + x + "</h2>";
  document.querySelector("body").innerHTML += tekstas;
}
printX1("saule");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

function printX2(xxx) {
  for (var i = 0; i < 100; i++) {
  document.write(xxx + " ")   // cia paraso ekrane 100 medis
  // console.log(xxx);        // cia paraso consoleje 100 medis
  }
}
printX2("medis");

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

function printX3(xx) {
  for (var i = 0; i < 12; i++) {
    document.write("<img  src=" + xx + ">");
  }
}
printX3("https://images-na.ssl-images-amazon.com/images/I/41brTpEWhhL._SY300_QL70_.jpg"); // cia funkcijos iskvietimas. rozes nukele i html pabaiga.

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

function piestiEilute(x) {
  for (var i = 0; i < 30; i++) {
    document.write(x)
  }
}
piestiEilute("-");

document.write("<br>" + "vardas / pavarde / amzius" + "<br>");

function piestiEilute(x) {
  for (var i = 0; i < 30; i++) {
    document.write(x);
  }
}
piestiEilute("-");

function spausdintiStulpeli(x) {
  for (var i = 0; i < 6; i++) {
    document.write("<br>" + x);
  }
}
spausdintiStulpeli("/");

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% nuo esamos algos.
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

let kiekMenesiu = 10 * 12;
let menAtlyginimas = 680;
let algosPokytis = 1;

let algosPokytisPinigais = menAtlyginimas * algosPokytis / 100;  //1% nuo esamos algos
// console.log("1% nuo algos", algosPokytisPinigais); pasitikrinam

menAtlyginimas += algosPokytisPinigais; // nauja alga po padidejimo
// console.log("atlyginimas po pakelimo", menAtlyginimas); pasitikrinam

for (var i = 0; i < 120; i++) {
  algosPokytisPinigais = menAtlyginimas * algosPokytis / 100; //1% nuo esamos algos
  menAtlyginimas += algosPokytisPinigais; // nauja alga po padidejimo
//  console.log( "po 10 metu atlyginimas: ", menAtlyginimas ); // consolej rodo kiekvieno menesio rezultata, t.y. 120 rezultatu, nes console yra FOR ciklo viduje.

}
console.log( "po 10 metu atlyginimas: ", menAtlyginimas ); // apie 2266.7eur consoleje ismeta galutini varianta, nes jau ne FOR ciklo viduje.


// ==============SCSS============================

//========= local/global or Frog/Garden =======
