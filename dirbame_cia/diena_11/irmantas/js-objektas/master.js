// 1Uzduotis

let mokinys = {
  vardas: "Jurgis",
  pavarde: "Jurgauskas",
  kelintokas: 7,
  matematikos_pazymiai: [6, 5, 9 , 10, 8],
  begu() {
    console.log("Begu, begu");
  }
}

console.log(mokinys);

// 1.2 Uzduotis
mokinys.kelintokas++;

if (mokinys.kelintokas = 13) {
  console.log("mokinys baige mokykla");
}

for (var i = 0; i < mokinys.matematikos_pazymiai.length; i++) {
  mokinys.matematikos_pazymiai[i] = 6;
}
console.log(mokinys.matematikos_pazymiai);


mokinys.miestas = "Kaunas"

console.log(mokinys);
mokinys.begu();
//2Uzduotis

let tevas = {
  vardas: "Antanas",
  pavarde: "Antanauskas",
  vaikai: [];
}

let vaikas = {
  vardas: "Tomas",
  klase: 10
}
tevas.vaikai[0] = vaikas;
//3 UZDUOTIS

function naujasDarbuotojas(nr, vardas, pavarde, alga) {
  this.nr = nr;
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.alga = alga;
}

let pirmasDarbuotojas = new naujasDarbuotojas(11, "Darius", "Darna", 800);
let antrasDarbuotojas = new naujasDarbuotojas(101, "Jonas", "Jonaitis", 1200);

console.log(pirmasDarbuotojas);
console.log(antrasDarbuotojas);

class Zmogus {
  constructor(vardas, pavarde) {
    this.vardas = vardas;
    this.pavarde = pavarde;
  }
}

let zmogus1 = new Zmogus("Toras", "Algimantas");

let zmogus2 = new Zmogus("Tadas", "Blinda");

console.log(zmogus1);
console.log(zmogus2);

// class Darbuotojas extends Zmogus {
//   constructor(vardas, pavarde, alga, nr) {
//     super(vardas);
//     this.vardas = vardas;
//     this.pavarde = pavarde;
//     this.nr = nr;
//     this.alga = alga;
//   }
//
//   algosPadidinimas() {
//     this.alga * 1.2;
//   }
// }
//
// let darbuotojas = new Darbuotojas("Antanas", "Baranauskas", 800, 5);
// console.log(darbuotojas);
// darbuotojas.algosPadidinimas();
// console.log(darbuotojas.alga);



















//
