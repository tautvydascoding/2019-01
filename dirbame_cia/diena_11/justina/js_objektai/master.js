// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined
// console.log( mama );  // not defined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

let mokinys = {
  vardas: "Tomas",
  pavarde: "Tomauskis",
  klase: 2,
  matematikos_pazymiai: [6, 5, 9, 10, 8],
  begu: function (km) {
    let tekstas = "begu" + km + "rytais";
    console.log(tekstas)
  },
  miestas: "Kaunas"
};

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

console.log("Vardas:", mokinys.vardas);
console.log("Pavarde:", mokinys.pavarde);
console.log("Klase:", mokinys.klase);
console.log("Pazymiai:", mokinys.matematikos_pazymiai.join(" "));

for (var i = 0; i < mokinys.matematikos_pazymiai.length; i++) {
  console.log( mokinys.matematikos_pazymiai[i] );
}

// UZDUOTIS 1.2
// PAKEISTI : perkelti mokini i sekancia klase

mokinys.klase ++;
console.log("perkelem i sekancia klase:", mokinys.klase);

// UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"

mokinys.klase = 5;

if (mokinys.klase >= 13) {
  console.log("Mokinys pabaige mokykla");
} else if (mokinys.klase == 5) {
  console.log("Mokinys pabaige pradine mokykla");
}

// pakeisti: visus 6 pazymius

mokinys.matematikos_pazymiai[1] = 7;
console.log(mokinys.matematikos_pazymiai[1]);

//ARBA

mokinys.matematikos_pazymiai.splice(0, mokinys.matematikos_pazymiai.length, 5, 5, 6, 4, 10);
console.log("Pakeisti pazymiai:", mokinys.matematikos_pazymiai.toString());


// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'

// mokinys.begu = function (km) {
//   console.log("begu" + km + "rytais"); //sita fja reikia ideti i objekta, bet ten reikia pakoreguoti.
// }

// prideti nauja kintamaji: miestas = 'kaunas'
// prideta virsuje, objekte.

// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

mokinys.begu(16); //fjos issaukimas


// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)

let tevas = {
  vardas: "Tadas",
  pavarde: "Petrauskas",
  vaikas: {}, // vaikas bus objektas, kuri veliau priskirsim
  vaikai: [] // jei vaiku daug, tai vaikai masyve bus atskiri vaikas objektai
};


// B) vaikas:  vardas (string), klase(number)

let vaikas = {
  vardas: "Morta",
  klase: 3
};

console.log( tevas );
console.log( vaikas );

tevas.vaikas = vaikas; //vaiko objekta priskiriame tevui.

console.log( tevas );

tevas.vaikai[0] = vaikas; // i 0 stalciuka idejom sukurta vaikas objekta
//ARBA
tevas.vaikai.push(vaikas);

// pakeisti vaika ir atspausdinti teva su vaiku.

vaikas.vardas = "Juozas";
console.log( tevas );

let prastaKopija = vaikas; //cia ne kopija, o tas pats objektas, todel pakeitus vieno vaiko varda, pasikeite ir kito vaiko vardas.

// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
// 3.1 sukurti pora darbuotoju ir atspausdinti ju duomenis

//============3=pvz: construktorius =====
function Car(dSkaicius, spalva, greitis) { // jusu duomenu struktura
    this.numberOfDoors = dSkaicius;  //this nurodo kintmaji fjos viduje
    this.color = spalva;
    this.maxSpeed = greitis;
}

// objekto kurimas
let AudiTT  = new Car(2, "red", 280); //NEW kuria objekta is skaiciu, ne is stringu
let Audi100 = new Car(5, "black", 200);

let Mitsubishi = new Car(4, "red", 210); // susikuriame nauja

console.log(AudiTT);
console.log(Mitsubishi);

AudiTT.maxSpeed = 250; // pakeiteme greiti
console.log(AudiTT);


function Worker(nr, vardas, pavarde, alga) {
  this.number = nr;
  this.name = vardas;
  this.lastName = pavarde;
  this.salary = alga;
}

let darbuotojas1 = new Worker(1, "Tomas", "Tomauskis", 800);
let darbuotojas2 = new Worker(2, "Agne", "Agniene", 750);
let darbuotojas3 = new Worker(3, "Adomas", "Adamonis", 500);

console.log(darbuotojas1);
console.log(darbuotojas2);
console.log(darbuotojas3);



// let x = new Number(); //cia blogai
// let y = 5; // gerai
// let tekstas = new String(); // cia blogai
// let txt = "mano tekstas"; // gerai


//1Uzduotis

// let mokinys = {
//   vardas: "Jurgis",
//   pavarde: "Jurgauskas",
//   kelintokas: 7,
//   matematikos_pazymiai : [6, 5, 9 , 10, 8]
// }
//
// console.log(mokinys);
//
// mokinys.kelintokas += 1 ;
//
// for (var i = 0; i < mokinys.matematikos_pazymiai.length; i++) {
//   mokinys.matematikos_pazymiai[i] = 6;
// }
//
// console.log(mokinys);
//
// mokinys.begu = function () {
//   console.log("Begu, begu");
// }
//
// mokinys.begu();
//
// mokinys.miestas = "Kaunas";
//
// console.log(mokinys);








































//
