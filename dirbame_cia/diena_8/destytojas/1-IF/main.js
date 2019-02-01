console.log(   " mokomes IF - salygas"  );

let arVedes = true;
if (arVedes == true) {
    console.log( "Sis asmuo vedes");
} else {
    console.log( "Sis asmuo Nevedes");
}
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama
arVedes = false;
let   arDuotiPaskola = false;
if (arVedes == true) {
    arDuotiPaskola = true;
} else {
    arDuotiPaskola = false;
}
if (arDuotiPaskola == true) {
    console.log(" siam zmogui paskola dodama!");
} else {
    console.log(" siam zmogui paskola NEDUODAMA");
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
// if (arVedes == true) {
//
// } else if (alga > 3000) {
//
// } else {
//     // ?
// }

//=============IF====================
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama

// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
let vardas1 = "Tomas";
if (vardas1 == "Tomas") {
    console.log("Labas Tomai");
} else {
    console.log("vardas nera Tomas");
}
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
vardas1 = "Tomas";
vardas2 = "mantas";
if (vardas1 == "Tomas"  && vardas2 == "Karolis") {
    console.log("Labas Tomai ir Karoli");
} else {
    console.log("Vardai nera TOmas ir Karolis");
}
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
vardas1 = "Karolis";
vardas2 = "mantas";
if (vardas1 == "Tomas"  || vardas2 == "Tomas") {
    console.log(" vienas is vardu yra Tomas");
} else {
    console.log("Nei vienas is vardu nera Tomas");
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
let age = 3;
if ( age < 7) {
    console.log("Pliusines varles");
} else if (age < 14) {
    console.log("mini telefonai");
} else if (age < 18) {
    console.log("new Music App");
} else if (age < 24) {
    console.log("Stok i sauliu sajunga");
}

// sunkesnis
 age = 73;
if ( age < 7 || age > 65) {
    console.log("20% nuolaida varlems is sokolado");
    if (age < 7) {
        console.log("Pliusines varles");
    } else {
        console.log("Kelione i BIrstona");
    }
} else if (age < 14) {
    console.log("mini telefonai");
} else if (age < 18) {
    console.log("new Music App");
} else if (age < 24) {
    console.log("Stok i sauliu sajunga");
}
// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// susikurti kintamaji 'klietoVardas' - kurio reiksme lyginsime
// kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
