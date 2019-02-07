// PRISIMINTI TEORIJA
// var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
// var zmogus; // undefined
// console.log( mama );  // not defined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

let mokinys = {
  vardas: "Jurgis",
  pavarde: "Jurgaitis",
  kelintokas: 7,
  pazymiai: [6, 5, 9, 10, 8],
  begti: function begu(km){
    let tekstas = "begu" + km + "rytais";
    console.log("tekstas");
  },
  miestai: ["Kaunas"],
}


// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

console.log(mokinys.vardas);
console.log(mokinys.pavarde);
console.log(mokinys.kelintokas);
console.log(mokinys.pazymiai.join(" "));

for (var i = 0; i < mokinys.pazymiai.length; i++) {
  console.log(mokinys.pazymiai[i]);
};

 // UZDUOTIS 1.2
// PAKEISTI : perkelti mokini i sekancia klase




for (var i = 0; i < mokinys.kelintokas; i++) {
  i = mokinys.kelintokas++;
}
console.log("Jurgis yra:" + mokinys.kelintokas + "-okas");

  // UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"

if (mokinys.kelintokas>= 13){
  console.log("mokinys pabaige moykla");
} else if (mokinys.kelintokas ==5){
  console.log("mokinys baige pradine mokykla");
}

// pakeisti: visus 6 pazymius

mokinys.pazymiai.splice(0, 5, 7, 9, 4, 10, 5);
console.log(mokinys.pazymiai.join(" "));

// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'

// mokinys.begti(10);


// prideti nauja kintamaji: miestas = 'kaunas'



// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"\

console.log(mokinys.pazymiai);
console.log(mokinys.miestai);



// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
// B) vaikas:  vardas (string), klase(number)

let tevas = {
  vardas: " bevardis",
  pavarde: "bepavardis",
  vaikas: {}
};

let vaikas = {
vardas: "Jone",
klase: 5,
};

console.log(tevas);
console.log(vaikas);

// daug vaiku:

// let tetis = {
//   vardas: " bevardis",
//   pavarde: "bepavardis",
//   vaikai:[]
// };
//
// tetis.vaikai[0];
// console.log(tetis.vaikai);
// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)

tevas.vaikas = vaikas;

console.log(tevas.vaikas);

// UZDUOTIS: pakeisti vaika ir atspausdinti teva su vaiku.

vaikas.vardas = "Jonukas", // cia ne kopija, o tas pats objektas

console.log(tevas.vaikas);


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
// 3.1 sukurti pora darbuotoju ir atspausdinti ju duomenis

function darbuotojas(nr, vardas, pavarde, alga){
  this.number = nr;
  this.name = vardas;
  this.surname = pavarde;
  this.pay = alga;
}

let naujasDarbuotojas = new darbuotojas(000333555, "Jonas", "Jonaitis", 800 + " euru");
let naujesnisDarbuotojas = new darbuotojas(555666999,"Petras", "Petraitis", 650 + " euru");
console.log(naujasDarbuotojas);
console.log(naujesnisDarbuotojas);


// ============3=pvz: construktorius =====

// function Car(dSkaicius, spalva, greitis) {
//     this.numberOfDoors = dSkaicius;
//     this.color = spalva;
//     this.maxSpeed = greitis;
// }

// objekto kurimas
// var AudiTT  = new Car(2, "red", 280);
// var Audi100 = new Car(5, "black", 200);
// console.log(AudiTT);
// console.log(Audi100);
