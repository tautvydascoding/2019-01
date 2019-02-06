/*jshint esversion: 6 */
console.log(   " mano js failas "  );
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)
let mokinys = {
  vardas: "Tomas",
  pavarde: "Tomsonas",
  kelintokas: 7,
  pazymiai: [6, 5, 9, 10, 8]
};
// atspauzdinti visus duomenis
document.querySelector("h1").innerHTML += mokinys.vardas + "<br>";
document.querySelector("h1").innerHTML += mokinys.pavarde + "<br>";
document.querySelector("h1").innerHTML += mokinys.kelintokas + "<br>";
for (var i = 0; i < mokinys.pazymiai.length; i++) {
  document.querySelector("h1").innerHTML += mokinys.pazymiai[i] + " ";
}
document.querySelector("h1").innerHTML += "<br>";
// PAKEISTI : perkelti mokini i sekancia klase
mokinys.kelintokas++;
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// prideti nauja kintamaji: miestas = 'kaunas'
if (mokinys.kelintokas > 12) {
  document.querySelector("h1").innerHTML += "mokinys pabaige mokykla <br>";
} else if (mokinys.kelintokas == 5) {
  document.querySelector("h1").innerHTML += "pabaige pradine mokykla <br>";
}
for (var i = 0; i < mokinys.pazymiai.length; i++) {
  mokinys.pazymiai[i]--;
}
function begu() {
  console.log("bugu begu");
}
mokinys.miestas = "Kaunas";
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"
for (var i = 0; i < mokinys.pazymiai.length; i++) {
  document.querySelector("h1").innerHTML += mokinys.pazymiai[i] + " ";
}
document.querySelector("h1").innerHTML += "<br>";
begu();
// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
// B) vaikas:  vardas (string), klase(number)
let tevas = {
  vardas: "",
  pavarde: "",
  vaikas: {}
};
let vaikas = {
  vardas: "",
  klase: 0
};
// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)
tevas.vaikas = vaikas;
// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
// -----------------------------------------------------------------------------
// let darbuotojas = {
//   nr: 0,
//   vardas: [],
//   pavarde: [],
//   alga: []
// };
// function idarbinimas(vardas, pavarde, alga) {
//   if (darbuotojas.nr == 0) {
//     this.darbuotojas.nr = 1;
//     this.darbuotojas.vardas = vardas;
//     this.darbuotojas.pavarde = pavarde;
//     this.darbuotojas.alga = alga;
//   }
//   this.darbuotojas.nr[darbuotojas.nr.length] = darbuotojas.nr.length + 1;
//   this.darbuotojas.vardas[darbuotojas.nr.length] = vardas;
//   this.darbuotojas.pavarde[darbuotojas.nr.length] = pavarde;
//   this.darbuotojas.alga[darbuotojas.nr.length] = alga;
// }
// // 3.1 sukurti pora darbuotoju ir atspausdinti ju duomenis
// idarbinimas(101, "Jonas", "Jonauskas", 1000);
// idarbinimas(102, "Matas", "Matauskas", 2000);
// idarbinimas(103, "Jurgis", "Jurgauskas", 3000);
// document.querySelector("h1").innerHTML += darbuotojas.vardas.join(" ");
// -----------------------------------------------------------------------------
function darbuotojas(nr, vardas, pavarde, alga) {
  this.nr = nr;
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.alga = alga;
}
let Algis = new darbuotojas(10, "Algimantas", "Algiauskas", 990);
let Romas = new darbuotojas(11, "Romaldas", "Rugiauskas", 550);
let Kestas = new darbuotojas(12, "Kestutis", "Kiauskas", 700);
console.log(Kestas);
console.log(Romas);
console.log(Algis);

//============3=pvz: construktorius =====
// function Car(dSkaicius, spalva, greitis) {
//     this.numberOfDoors = dSkaicius;
//     this.color = spalva;
//     this.maxSpeed = greitis;
// }
//
// // objekto kurimas
// var AudiTT  = new Car(2, "red", 280);
// var Audi100 = new Car(5, "black", 200);
