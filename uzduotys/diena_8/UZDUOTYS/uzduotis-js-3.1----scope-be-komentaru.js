// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja


//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gaunate kalida ar ne?


//================local && global=========
// var x = "x -viesas ";
// function testLocalVar() {
//    var y = "y -vietinis ";
//    z = "z -viesas";
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
// }
 // KLAUSIMAS:  pries paleidziant/atkomentuojant    consoles (apacioje)- atspekite kurios nesuveiks
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);
 // KLAUSIMAS:  pries paleidziant f-ja - atspekite kurios  consoles (f-joje) nesuveiks
// testLocalVar();
 // KLAUSIMAS:  pries paleidziant/atkomentuojant    consoles (apacioje)- atspekite kurios nesuveiks
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);

//------
 // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspausdinti abu f-jos viduje
 // E) atspausdinti  uz f-jos

 // var katinas = "juodas";
 //
 // function test2() {
 //     var katinas = "baltas";
 //    console.log("1 katinas:", katinas);
 //    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);
 // }
 // KLAUSIMAS: Pries paleidziant f-ja - atspekite kurios  consoles (f-joje) nesuveiks
 // test2();
 // KLAUSIMAS: Ka isves konsole "3 katinas" - juodas AR bartas????
 // console.log("3 katinas:", katinas);

//==========================

 // var xx = 10;
 //
 // function isvesti( xx ) {
 //     xx = 20;
 //     console.log( "1. xx:", xx);
 //     console.log( "2. this.xx:",   this.xx);
 // }
 // KLAUSIMAS: Ka isves konsole "3. XX" - 10 AR 20 AR klaida????
 // console.log( "3. xx:", xx);
 // KLAUSIMAS: Pries paleidziant f-ja - atspekite Ka isves konsole "1. XX ir 2. xx" - 10 AR 20 AR 999????
 // isvesti( 999 );
 // KLAUSIMAS: Ka isves konsole "4. XX" - 10 AR 20 AR klaida????
 // console.log( "4. xx:", xx);

 //======================
 // var vardas = "Jonas";
 // function myName ( vardas ) {
 //     console.log( " vardas" + vardas);
 //     console.log("this.vardas - f-jos viduje: ",  this.vardas);
 // }
 // myName("PETRAS");
//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


//=======================================
