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

for (var i = 0; i < 40; i++) {
    console.log( " Azuolas", i);
}

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
document.write("Sveiki");
for (var i = 0; i < 30; i++) {
    document.write("<h3> Azuolas </h3>", i);
}

// 1.2 UZDUOTIS
// (HTML faile susikurti article elementa)
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

document.querySelector('body').innerHTML +=  "Viso" ;
for (var i = 0; i < 30; i++) {
    document.querySelector('body').innerHTML += "<h2>1Azuolas </h2>"+i ;
}


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function printX(x) {
    let tekstas = "<h2> " + x + "</h2>";
    document.querySelector('body').innerHTML += tekstas;
}
printX("Tomas");
printX("Jurgis");
printX("Antanas");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for (var i = 0; i < 20; i++) {
    printX("Tomas" );
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)




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
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% nuo ta menesi esamos algos (~6.8eur)
let kiekMenesiu = 10 * 12;
let menAtlyginimas = 680;
let algosPokytis = 1;  // 1%

let algosPokytisPinigais = menAtlyginimas * algosPokytis / 100;
// console.log( "1% nuo 680:", algosPokytisPinigais);
menAtlyginimas += algosPokytisPinigais;
// console.log( "atlyginimas po pakelimo:",  menAtlyginimas );

for (var i = 0; i < 120; i++) {
    algosPokytisPinigais = menAtlyginimas * algosPokytis / 100; // 1%
    menAtlyginimas += algosPokytisPinigais;  // ATLYGINIMAS PO PADIDEJIMO
    console.log(  "po 10 metu atlyginmas: ", menAtlyginimas);
}
// ==============SCSS============================

//========= local/global or Frog/Garden =======
