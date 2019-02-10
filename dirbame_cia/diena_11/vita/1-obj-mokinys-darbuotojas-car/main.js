console.log(   " mano js failas "  );
// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined
// console.log( mama );  // not defined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

let mokinys = {
  vardas : "Jurgis",
  pavarde :"Jurgauskas",
  kelintokas : 7,
  pazymiai : [6, 5, 9, 10, 8],
  miestas : "Kaunas",
  begu : function(km){
    console.log("begu" + "  " + km + "  " + "rytais");
  }
};
console.log(mokinys);

// UZDUOTIS 1.2
// PAKEISTI : perkelti mokini i sekancia klase

mokinys.kelintokas ++;
console.log(mokinys);

// UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// prideti nauja kintamaji: miestas = 'kaunas'

mokinys.kelintokas >= 13;

if (mokinys.kelintokas === 13) {
  console.log("mokinys pabaige mokykla");
} else if (mokinys.kelintokas === 5) {
  console.log("pabaige pradine mokykla");
}

mokinys.pazymiai.splice(0, mokinys.pazymiai.length, 5, 6, 7, 8, 9);
console.log("pasikeite mokinio pazymiai", mokinys.pazymiai);

console.log("mokinys yra is:", mokinys.miestas);


// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

console.log("visi duomenys:", mokinys);

for (var i = 0; i < mokinys.pazymiai.length; i++) {
  console.log(mokinys.pazymiai[i]);
}

mokinys.begu(7);


// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
// B) vaikas:  vardas (string), klase(number)
// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)


let tevas = {
  vardas : "bevardis",
  pavarde : "bepavardis",
  vaikai : []
};

let vaikas = {
  vardas : "bevardis",
  klase : 0
};

console.log("tevas", tevas);
console.log("vaikas", vaikas);

tevas.vaikai[0] = vaikas;
tevas.vaikai.push (vaikas);


//Uzduotis: pakeisti vaika ir atspausdinti teva ir vaika
vaikas.vardas = "Gabrielius";
vaikas.klase ++;
console.log("tevas", tevas);
console.log("vaikas", vaikas);


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
// 3.1 sukurti pora darbuotoju ir atspausdinti ju duomenis

function darbuotojas(eilNr, darbVardas, darbPavarde, darbAlga) {
  this.numeris = eilNr;
  this.vardas = darbVardas;
  this.pavarde = darbPavarde;
  this.alga = darbAlga;
};

let Darbuotojas1 = new darbuotojas (1,"Jonas", "Jonaitis", 900);
let Darbuotojas2 = new darbuotojas (2,"Petras", "Petraitis", 950);
console.log(Darbuotojas1);

//============3=pvz: construktorius =====

function Car(dSkaicius, spalva, greitis) {
     this.numberOfDoors = dSkaicius;
     this.color = spalva;
     this.maxSpeed = greitis;
 }

 // objekto kurimas
 var AudiTT  = new Car(2, "red", 280);
 var Audi100 = new Car(5, "black", 200);
 let Mitsubishi = new Car (4,"red, 210");

console.log(AudiTT);
console.log(Audi100);


 //let x = new Integer(); // cia yra blogai
 let y = 5; // cia yra kopijaNEGERAI
let tekstas = new String(); // cia yra blogai
