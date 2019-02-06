// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined
// console.log( mama );  // not defined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

let mokinys = { vardas: "Jurgis" , pavarde: "Jurgauskas" , amzius: 18, kelintokas: 5 , pazymiai: [6, 5, 9 , 10, 8]};
console.log(mokinys.vardas);
mokinys.amzius++; // amziaus pridejimas
mokinys.vardas = "Tomas"; // vardo pakeitimas
console.log(mokinys);
console.log(mokinys.pazymiai.join(' '));


for (let i = 0; i < mokinys.pazymiai.length; i++) {
    console.log(mokinys.pazymiai[i]);
    
    
}
//1.2.1 uzduotis
if(mokinys.kelintokas == 13){
    console.log("mokinys pabaige mokykla");
    
}else if(mokinys.kelintokas == 5){
    console.log("pabaige pradine mokykla");
    
}
mokinys.pazymiai.splice(0, mokinys.pazymiai.length, 3, 5, 6, 7,6);

console.log(mokinys.pazymiai.toString());



mokinys = { vardas: "Jurgis" ,
            pavarde: "Jurgauskas" ,
            amzius: 18,
            kelintokas: 5,
            pazymiai: [6, 5, 9 , 10, 8],
            miestas : "Kaunas",
            begti : function (pav){
                console.log(pav);
    
            }
};
// 1.3
console.log(mokinys);
mokinys.begti("begu begu");

//2 uzduotis

let tevas = { vardas: "Antanas",
              pavarde: "Petrauskas",
              vaikai: [],

}
 let vaikas = { vardas: "Simas",
                klase: 5,

 }
 tevas.vaikai[0] = vaikas;
 //arba
//  tevas.vaikai.push(vaikas);
 //pakeisti vaika
 let vaikas1 = { vardas: "Onute",
 klase: 6,

}
tevas.vaikai[0] = vaikas1;
 console.log(tevas);
 
 //3 uzduotis

 function darbuotojas(nr, vard, pavard, sallary){
     this.numeris = nr;
     this.vardas = vard;
     this.pavarde = pavard;
     this.alga = sallary;
 }
 let darbuotojas2 = new darbuotojas(33, "Petras", "Petrutis", 1000);
 let darbuotojas3 = new darbuotojas(30, "Antanas", "Antaniukas", 1200);
 console.log(darbuotojas2, darbuotojas3);
 

//Visi masyvai ir objektyvai yra objektai(tipas)

function Car (dSkaicius, spalva, greitis) {
    this.numberOfDoors = dSkaicius;
    this.color = spalva;
    this.maxSpeed = greitis;
}

// objekto kurimas zodelis new
var AudiTT  = new Car(2, "red", 280);
var Audi100 = new Car(5, "black", 200);
let Nissan = new Car(4, "blue", 150);
console.log(Nissan);


// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

// UZDUOTIS 1.2
// PAKEISTI : perkelti mokini i sekancia klase

// UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// prideti nauja kintamaji: miestas = 'kaunas'
// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
// B) vaikas:  vardas (string), klase(number)
// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
// 3.1 sukurti pora darbuotoju ir atspausdinti ju duomenis

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
