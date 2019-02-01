console.log(   " mano js failas "  );


let arVedes = true;
let arDuotiPaskola = false;

if (arVedes == true) {
arDuotiPaskola = true;
} else {
  arDuotiPaskola = false;
}

if (arDuotiPaskola == true) {
  console.log( "sis zmogus paskola gauna" );
} else {
  console.log( "sis zmogus paskolos NEGAUNA" );
}

// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }
if(true){
	console.log("labas")
}

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

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
  console.log("vardai sutampa");
} else {
  console.log("vardai yra skirtingi");
}

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 == "Tomas") {
  console.log("labas Tomai");
}


// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti, kad vardai : "Tomas ir Karolis"
if (vardas1 == "Tomas" && vardas2 == "Karolis" ){
console.log("vardai : Tomas ir Karolis");
} else {
  console.log("vienas is vardu neteisingas");
}


// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti

if (vardas1 == "Tomas" || vardas2 == "Tomas" ) {

  console.log("vienas is vardu yra Tomas");
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

var age = 12;

if  (age < 7 || age > 65) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
    if ( age < 7 ){
    console.log("Pliusines varles");
    }
} else if ( age >= 7 && age <= 14 ){
  console.log("Mini telefonai");
} else if (age >= 15 && age <= 18 ){
  console.log("new Music App");
} else if ( age >= 19 && age <= 24 ){
  console.log ("Stok i sauliu sajunga");
} else if ( age >= 25 && age <= 65 ) {
  console.log( "Pensijos kaupimas - uzsiregistruok");
} else if ( age > 65) {
  console.log( "kelione i Bristona" );
}


// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// susikurti kintamaji 'klietoVardas' - kurio reiksme lyginsime
// kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

let vardas4 = "Tomas";
let vardas5 = "Paulius";
let vardas6 = "Airidas";
var klietoVardas = "Paulius";

if (klietoVardas == vardas4) {
  console.log("Masinoms 10% nuolaida");
} else if (klietoVardas == vardas5 ) {
  console.log("Buitinei technikai  30% nuolaida");
} else {
  console.log("5% nuolaida kelionems");
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
var klietoTipas = "gold";

if ( klietoTipas == klientas1 ) {
  console.log(" 15% nuolaida");
} else if (klietoTipas == klientas2) {
  console.log(" 30% nuolaida");
} else {
  console.log(" 5% nuolaida  ");
}
