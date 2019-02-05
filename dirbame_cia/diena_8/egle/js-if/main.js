console.log(   " mano js failas "  );


let arVedes = true;

if (arVedes) {
  console.log("Sis zmogus vedes");
} else {
  console.log("sis zmogus nevedes");
}


let arDuotiPaskola = false;

if (arVedes!=1) {
  console.log("paskolos neduoti");
}else {
  console.log("paskola duoti");
}

if (arVedes == true) {
  arDuotiPaskola = true;
} else {
  arDuotiPaskola=false;
}

if (arDuotiPaskola == true) {
  console.log("siam zmogui paskola duodama!");
} else {
  console.log("siam zmogui paskola neduodama!");
}

// ---------------------------------------------------------

//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba


let vardas1 = "Tomas";
let vardas2 ="Antanas";

if (vardas1 == vardas2) {
  console.log("vardai sutampa");
} else {
  console.log("vardai yra skirtingi");
}

if (vardas1 == "Tomas") {
  console.log("labas Tomai!");
}

if (vardas1 == "Tomas" && vardas2 == "Karolis") {
  console.log("Tomas ir Karolis");
}else {
  console.log("vardai NE Tomas ir Karolis");
}

if (vardas1 = "Tomas" || vardas2 == "Tomas") {
  console.log("TAIP!");
} else {
  console.log("NE!");
}


// -------------------------------------------------------------
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

let age = 16;

if (age<7) {
  console.log("pliusines varles");
} else if (age>=7 && age<14) {
console.log("Mini telefonai");
} else if (age>=14 && age<18){
  console.log("new Music app");
} else if (age>=18 && age<24) {
  console.log("Stop i sauliu sajunga");
} else if (age >= 24 && age<65){
  console.log("kelione i Birstona");
}


if (age<7 || age>65){
  console.log("Sokoladiniai zuikuciai 20% nuolaida");
  if (age<=7){
    console.log("pliusines varles");
  }else if (age>=65){
    console.log("kelione i Birstona");
  }
}

// Arba:
// if (a <7)
// else if (a <14)
// else if (a <21)
// else if ( a <25)

//----------------------------------------------------------------
// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// susikurti kintamaji 'klietoVardas' - kurio reiksme lyginsime
// kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

//
let vardas3 = "Paulius";
let vardas4 = "Airidas";
let klientoVardas = "Airidas";

if (klientoVardas == vardas1){
console.log("Masinoms 10% nuolaida");
} else if (klientoVardas == vardas4){
  console.log("Buitinei technikai  30% nuolaida");
} else {
  console.log("5% nuolaida kelionems");
}

//------------------------------------------------------
// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//

let pirmas = "bronze";
let antras = "silver";
let trecias = "gold";
let klientoTipas = "bronze"

if (klientoTipas == pirmas){
  console.log(" 15% nuolaida");
} else if(klientoTipas == antras){
  console.log(" 30% nuolaida");
}else{
  console.log(" 5% nuolaida");
}
