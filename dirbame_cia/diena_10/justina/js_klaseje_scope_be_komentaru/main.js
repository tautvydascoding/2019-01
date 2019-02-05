console.log("labas");


// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys() {
  let vardas = "Tomas";
  console.log(vardas);
}
printDuomenys ();


//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gaunate klaida ar ne?

// console.log(vardas); //vardas is not defined (kompiuteris mato ji pirma karta ir nera girdejes), nes kintamasis yra tik laikinas, sukurtas f-jos viduje ir uz f-jos ribu jis neegzistuoja. O console iesko global kintamojo. Console uzkomentuota, kad js nemestu klaidos.


//================local && global=========
var x = "x -viesas ";
function testLocalVar() {
   var y = "y -vietinis ";
   z = "z -viesas";
   console.log("x", x); // viesas global
   console.log("y", y); // vietinis local
   console.log("z", z); // viesas global
}
// testLocalVar(); //kai f-ja iskviesta virsuje consoles
// console.log("x", x); // suveiks
// console.log("z", z); // suveiks
// console.log("y", y); // nesuveiks

// kitas variantas

// console.log("x", x); // suveiks, nes x globalus ir yra virs f-jos. Nors f-ja dar neiskviesta, x kompiuteris randa.
// console.log("z", z); // nesuveiks, nes z, nors ir globalus, bet sukurtas f-jos viduje, o f-ja dar neiskviesta.
// console.log("y", y); //  nesuveiks, nes y yra lokalus ir tik f-joje egzistuoja.
// testLocalVar(); // kai f-ja iskviesta apacioje consoles


//------
 // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos

 var katinas = "juodas";

 function test2() {
     var katinas = "baltas";
    console.log("1 katinas:", katinas); //isves baltas
    console.log("2 this.katinas - f-jos viduje: ",  this.katinas); // this. islipa viena kart is f-jos ir iesko reiksmiu. Randa "juodas";
 }
 test2();

 console.log("3 katinas:", katinas); // uz f-jos ribu iesko global reiksmiu, t.y. juodas.

//==========================

 var xx = 10;

 function isvesti( xx ) {
     xx = 20;
     console.log( "1. xx:", xx); // Nieko neisveda, nes neissaukta f-ja. Jei ji butu issaukta, tai isvestu 20, nes pirma iesko savo bute ir randa local reiksme xx = 20;
     console.log( "2. this.xx:",   this.xx); // Nieko neisveda, nes neissaukta f-ja. Jei ji butu issaukta, tai isvestu 10, nes this. islipa vienu laipteliu is funkcijos ir iesko global (siuo atveju).
 }
//      isvesti(); cia pati parasiau isvedima, salygoje nebuvo.

 console.log( "3. xx:", xx); // isves 10, nes neissaukta f-ja, todel joje kompiuteris net neisko, o pirma randa globalia reiksme xx = 10;


 //======================
 var vardas = "Jonas";
 function myName ( vardas ) {
     console.log( " vardas" + vardas); // isves "PETRAS", nes duotas laikinas kintamasis.
     console.log("this.vardas - f-jos viduje: ",  this.vardas); // isves "Jonas", nes this. islipa is f-jos ir iesko globaliai
 }
 myName("PETRAS");


//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greit pageres orai", "Vasaros vis salteja"

function printAntraste(x) {
  let tekstas = "<h2>" + x + "</h2>";
  document.querySelector('body').innerHTML += tekstas;
  }
printAntraste ("BMW pinga, nes daugeja");
printAntraste ("Greit pageres orai");
printAntraste("Vasaros vis salteja");

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")

function printStraipsnis(x) {
  let tekstasp = "<p>" + x + "</p>";
  document.querySelector ('body').innerHTML += tekstasp;
}

printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

printAntraste ("BMW pinga, nes daugeja");
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");

printAntraste ("Greit pageres orai");
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");

printAntraste("Vasaros vis salteja");
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."); //cia principas, kad struktura yra h2+p. Ir si elementa su for ciklu butu galima kartoti kiek nori kartu ir tai sukuriama svetaines struktura.



//=======================================
