console.log(   " mano js failas "  );

// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined
// console.log( mama );  // not defined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

let mokinys = {
     vardas : "Toma",
     pavarde : "Tomalaite",
     kelintokas : 7,
     pazymiai : [6, 5, 9 , 10, 8],
     begu : function (km) {
         let tekstas = " begu " + km + " rytais   ";
         console.log( tekstas );
     }
}
mokinys.vardas = "Jurgis";
mokinys.pavarde = "Jurgauskas";
mokinys.kelintokas = 7;

// 1.1 UZDUOTIS
// atspausdinti visus duomenis
console.log(  mokinys.vardas );
console.log(  mokinys.pavarde );
console.log(  mokinys.kelintokas );
console.log(  mokinys.pazymiai.join(" ") );
// ARBA
for (var i = 0; i < mokinys.pazymiai.length; i++) {
    console.log(   mokinys.pazymiai[i]   );
}

// UZDUOTIS 1.2
// PAKEISTI : perkelti mokini i sekancia klase
mokinys.kelintokas++;
// UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"
if (mokinys.kelintokas >= 13) {
    console.log( "mokinys pabaige mokykla"  );
} else if (mokinys.kelintokas == 5) {
    console.log(  "pabaige pradine mokykla" );
}
// pakeisti: visus 6 pazymius
mokinys.pazymiai = [5, 5, 6, 4, 10];
mokinys.pazymiai.splice(0, mokinys.pazymiai.length, 5,5, 6, 4, 10);
console.log(  "pazymiai:",   mokinys.pazymiai.toString()     );
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'

// prideti nauja kintamaji: miestas = 'kaunas'
// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"
mokinys.begu(16);

// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
let tevas = {
    vardas: "bevardis",
    pavarde: "bepavardenis",
    vaikai: []
};
let vaikas = {
    vardas: "bevardis",
    klase: 0
};
console.log(   tevas  );
console.log(   vaikas  );
// B) vaikas:  vardas (string), klase(number)
// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)
tevas.vaikai[0] = vaikas;
// ARBA
tevas.vaikai.push( vaikas);
// UZDUOTIS: pakeisti vaika ir atspausdinti teva ir vaika
vaikas.vardas = "Juozas";
console.log(   tevas  );
console.log(   vaikas  );

let prataKopija = vaikas;  // cia ne kopija, o lygiai tas pats objektas

// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
// 3.1 sukurti pora darbuotoju ir atspausdinti ju duomenis

//============3=pvz: construktorius =====
function Car(dSkaicius, spalva, greitis) {
    this.numberOfDoors = dSkaicius;
    this.color = spalva;
    this.maxSpeed = greitis;
}

// objekto kurimas
var AudiTT  = new Car(2, "red", 280);
var Audi100 = new Car(5, "black", 200);
let Mitsubishi = new Car(4, "red", 210);
console.log(   AudiTT   );
console.log(   Audi100  );
AudiTT.maxSpeed = 250;

// let x = new Number();  // cia bloagai
let y = 5;            // gerai
// let tekstas = new String(); // cia blogai
let txt = "mano tekstas";  // gerai


//
