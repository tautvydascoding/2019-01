console.log(   " mano js failas "  );

//==============TEORIJA ++ / -- ==========
    var x = 10;
    x = x + 3;  // x = 13
    x += 3;     // tas pats kad x = x + 3;
    x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

var i;

for (i = 0; i < 50; i++) {
  console.log("Azuolas", i );
}

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

document.querySelector("h1").innerHTML += ("<h3> Azuolas </h3>");

document.write("laba diena" + "<br>");


// 1.2 UZDUOTIS
// html faile susikurti <article> elementa
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

for(var n = 0; n < 50; n++ ){
document.querySelector("article").innerHTML += "<h2> 1Azuolas </h2>" + n;
}

// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba

for(var a = 0; a < 6; a++ ){
document.querySelector("ul").innerHTML += ("<li> elementas 1 </li> ");
}

// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandasntis automatiskai)


for(var b = 0; b < 10; b++ ){
document.querySelector("header").innerHTML += "<p>" + "Aprasymas" + " " + b + "</p>";
}


// 1.5 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <ul> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)

for(var c = 1; c < 7; c++ ){
document.querySelector("ul").innerHTML += "<br>" + "<li>" + "elementas" + " " + c + "</li>";
}


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function printX(name){
  document.querySelector("article").innerHTML += "<h2>" + name + "</h2>" ;
}
printX("laura");

function printX(name){
  document.querySelector("article").innerHTML += "<br>" + name  ;
}
printX("karolis");
printX("mykolas");
printX("migle");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

function printX(name){
  document.querySelector("article").innerHTML += "<br>" + name  ;
}

for(var m = 0; m < 100; m++ ) {
  printX("karolis");
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

function printX(name){
  document.querySelector("article").innerHTML += "<br>" + name  ;
}
for(var m = 0; m < 12; m++ ) {
  printX("<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/220px-HTML5_logo_and_wordmark.svg.png' alt='html'>");
}



// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
//funcion piestiEilute20() {
//let eilute = "";
//for (var i = 0; i < 20; i++) {
//eilute = eilute + "-";
//}
  //console.log(eilute);





//}
//piestiEilute(20);




// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% nuo to menesio algos (~6.8eur)

let kiekMenesiu = 10 * 12;
let menAtlyginimas = 680;
let algosPokytis = 1;  // 1%
let algosPokytisPinigais = menAtlyginimas * algosPokytis / 100;

// console.log(algosPokytisPinigais);

menAtlyginimas += algosPokytisPinigais;
// console.log(menAtlyginimas );

  for(var k = 0; k < 120; k++ ){
    algosPokytisPinigais = menAtlyginimas * algosPokytis / 100;
    menAtlyginimas += algosPokytisPinigais;
  }
console.log("alga po 10m:", menAtlyginimas);

// ==============SCSS============================

//========= local/global or Frog/Garden =======
