//Uzduotis A
// function printDuomenys() {
//   let vardas = "Tomas";
//   console.log(vardas);
// };
// printDuomenys();
//Uzduotis B
// console.log(vardas);

//local ir global
// var x = "x -viesas ";
// function testLocalVar() {
//    var y = "y -vietinis ";
//    z = "z -viesas";
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
// }
// testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);

//UZDUOTIS

// let katinas = "juodas";
// function logKatinas() {
//   let katinas = "baltas";
//   console.log(katinas);
//   console.log(katinas);
// }
// logKatinas();
// console.log(katinas);
// console.log(katinas);

// var katinas = "juodas";
//
// function test2() {
//     var katinas = "baltas";
//    console.log("1 katinas:", katinas);
//    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);
// };
//
// test2();
// console.log("3 katinas:", katinas);

// var xx = 10;
//
// function isvesti( xx ) {
//     xx = 20;
//     console.log( "1. xx:", xx);
//     console.log( "2. this.xx:",   this.xx);
// }
// isvesti( 50 );
// console.log( "3. xx:", xx);

// var vardas = "Jonas";
// function myName ( vardas ) {
//     console.log( " vardas" + vardas);
//     console.log("this.vardas - f-jos viduje: ",  this.vardas);
// }
// myName("PETRAS");

function printAntraste(x) {
  document.querySelector("div").innerHTML += "<h1>" + x + "</h1>"
}

function printStraipsnis(x) {
  document.querySelector("div").innerHTML += "<p>" + x + "</p>"
}

printAntraste("BMW pinga, nes daugeja");
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

printAntraste("Greit pageres orai");
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

printAntraste("Vasaros vis salteja");
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");































//
