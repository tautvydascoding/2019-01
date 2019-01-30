console.log(   " mano js failas "  );


// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//let manoH1 = document.querySelector('h1');
//console.log( manoH1 );

//----Elemento duomenys--------
// auksto paemimas:
//var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
//var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x) {
console.log( "kaina:",  x);
}
printKaina(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

printKaina(999);
printKaina(13.49);
printKaina(100.05);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
let vidurkis = (5 + 10 + 8 + 6 + 8)/5;
console.log("vidurkis:", vidurkis);
}
pazymiuVidurkis();

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis2(x1, x2, x3, x4, x5) {
let vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
console.log("vidurkis:",  vidurkis);
}
pazymiuVidurkis2(5, 10, 8, 6, 8);
pazymiuVidurkis2(9, 10, 9, 6, 8);
pazymiuVidurkis2(4, 10, 6, 6, 8);

//=====================RETURN==================

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja

let vardas1 = "Paulius" ;
function getVardas(){
  return vardas1;
}
console.log(getVardas());



// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde(){
  let pavarde3 = "Tomauskas";
  let vardas3 = "Antanas";
  return pavarde3 + " " + vardas3;
  console.log("kodas kuris niekada neivyks nes yra po return zodeliu");
}
console.log("pirkejo duomenys", getVardasPavarde());

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas(){

  let pajamos = 12500;
  let islaidos = 7500;
  let pelnas = pajamos - islaidos
  return pelnas;
}
console.log("pelnas", getPelnas());


// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas1(pajamos, nuostoliai){
  let pelnas1 = pajamos - nuostoliai;
  return pelnas1;
}
 console.log( "pelnas", getPelnas1( 12500, 7500));
 console.log("pelnas", getPelnas1( 2500, 1000));
 console.log("pelnas", getPelnas1( 3500, 1500));


// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis2(x1, x2, x3, x4, x5){
let vidurkis3 = (x1 + x2 + x3 + x4 + x5) / 5;
  return vidurkis3;
}
document.querySelector("h1").innerHTML += getPazymiuVidurkis2(8, 9, 7, 5, 7); //isveda i html langa
console.log( "vidurkis", getPazymiuVidurkis2(8, 9, 7, 5, 7) );

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis(){
  //surandame h1 ir paimame jo auksti su padding
return  document.querySelector("h1").offsetHeight;
}
console.log("h1 aukstis:", getH1ElementoAukstis()) ;


function getElementoAukstis( elementoPav ){
  //surandame h1 ar kitus elementus ir paimame ju auksti su padding
return  document.querySelector( elementoPav ).offsetHeight;
}
console.log("body aukstis:", getElementoAukstis("body")) ;
console.log("h1 aukstis:", getElementoAukstis("h1")) ;
console.log("h2 aukstis:", getElementoAukstis("h2")) ;

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====
