//0 Uzduotis
//A)

let vardas1 = "Tomas";
let vardas2 = "Tomas";

if (vardas1 === vardas2) {
  console.log(`${vardas1} ir ${vardas2} vardai sutampa`)
} else {
  console.log(`${vardas1} ir ${vardas2} vardai nesutampa`);
};

//B

if (vardas1 === "Tomas") {
  console.log("Labas, Tomai!")
};

//C

if (vardas1 === "Tomas" && vardas2 === "Karolis") {

};
//D

if (vardas1 === "Tomas" || vardas2 === "Tomas") {

};

//1 Uzduotis

let age = 68;

if (age < 7 || age >= 65) {
    if (age < 7) {
        document.querySelector("h1").innerHTML = "Pliusines varles"
    } else { document.querySelector("h1").innerHTML = "kelione i Bristona"
  }
  document.querySelector("p").innerHTML = "Sokoladiniai zuikuciai 20% nuolaida"
} else {
    if ( 7 <= age && age < 14 ) {
    document.querySelector("h1").innerHTML = "Mini telefonai"
  } else if ( 14 <= age && age < 18 ) {
    document.querySelector("h1").innerHTML = "new Music App"
  } else if ( 18 <= age && age < 24 ) {
    document.querySelector("h1").innerHTML = "Stok i sauliu sajunga"
  } else if ( 24 <= age && age < 65 ) {
    document.querySelector("h1").innerHTML = "Pensijos kaupimas - uzsiregistruok"
  }
};

//2 Uzduotis????????????
// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// susikurti kintamaji 'klietoVardas' - kurio reiksme lyginsime
// kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

let name1 = "Tomas";
let name2 = "Paulius";
let name3 = "Airidas";

let klientoVardas = "Paulius";

if (klientoVardas === name1) {
  document.querySelector("h3").innerHTML = "Masinoms 10% nuolaida"
} else if (klientoVardas === name2) {
  document.querySelector("h3").innerHTML = "Buitinei technikai  30% nuolaida"
} else if (klientoVardas){
  document.querySelector("h3").innerHTML = "5% nuolaida kelionems"
};


//3 Uzduotis

let klietoTipasBronze = "bronze";
let klietoTipasSilver = "silver";
let klietoTipasGold = "gold";

let klientoTipas = "bronze"

if (klientoTipas === klietoTipasBronze) {
  document.querySelector("h2").innerHTML = "Jusu klientoTipas yra bronze jums taikoma 15% nuolaida"
} else if (klientoTipas === klietoTipasSilver) {
  document.querySelector("h2").innerHTML = "Jusu klientoTipass yra silver jums taikoma 30% nuolaida"
} else {
  document.querySelector("h2").innerHTML = "5% nuolaida"
}















//bbbb
