// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================

//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:
// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// document.write(" <b class='bg-info'> Mano tekstas </b>");
// window.alert("labas");
// window.alert("labas");
// alert("Viso");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
//let ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
//console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// document.querySelector('h1').innerHTML = " <b>Antraste</b>"
//----Elemento duomenys--------
// auksto paemimas:
//var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
//var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
//document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);
function printKaina(x) {
  console.log("printKaina: ", x);
};
printKaina(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);
printKaina(999);
printKaina(13.49);
printKaina(100.05);
printKaina("printKaina( 999);");
// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
  let m1 = 5;
  let m2 = 10;
  let m3 = 8;
  let m4 = 6;
  let m5 = 8;
  let vid = (m1 + m2 + m3 + m4 + m5)/5;
  console.log( "Pazymiu vidurkis: ", vid);
}
pazymiuVidurkis();
// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis1(m1,m2,m3,m4,m5) {
  let vid = (m1 + m2 + m3 + m4 + m5)/5;
  console.log( "Pazymiu vidurkis: ", vid);
};

pazymiuVidurkis1(5, 5 , 6 , 4 , 2);
//=====================RETURN==================

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
let vardas = "Tomas";
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
function getVardas() {
  return vardas;
};
// C) patikrinti ar veikia f-ja
console.log(getVardas());

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
function getVardasPavarde(vardas, pavarde) {
  return vardas + " " + pavarde;
};
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja
console.log(getVardasPavarde("Antanas", "Tomauskas"));
// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
function getPelnas() {
  let pajamos = 12500;
  let islaidos = 7500;
  return pelnas = pajamos - islaidos;
}
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja
console.log(getPelnas());
// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja
function getPelnas1(pajamos, nuostoliai) {
  return pajamos - nuostoliai;
};

console.log(getPelnas1(15000, 12555));

// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
  return (x1 + x2 + x3 + x4 + x5)/5
};
console.log(getPazymiuVidurkis2(5, 8, 9, 10, 10));

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
function getH1ElementoAukstis() {
  document.querySelector("h1").style.fontSize = "100px"
}
getH1ElementoAukstis();
// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######
for (let i = 0; i < 7; i++) {
  let text = "#";
  console.log(text.repeat(i));
}

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====
