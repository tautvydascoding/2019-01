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

// let manoH1 = document.querySelector('h1'); //surandar h1 elementa
// console.log( manoH1 ); //atspausdiname surasta elementa. manoH1 elemente yra saugoma visa info apie si elementa (spalva, pozicija ekrane, plotis, aukstis ir tt)

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);
function printKaina1(x) {
  console.log (x);
}

printKaina1(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

function printKaina(x) {
  console.log ("printKaina", x);
}

printKaina(999);
printKaina(13.49);
printKaina(100.05);


// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
  let vidurkis = (5 + 10 + 8 + 6 + 8) / 5;
  console.log("vidurkis", vidurkis );
}
pazymiuVidurkis();


// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
  let vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
  console.log("vidurkis", vidurkis );
}
pazymiuVidurkis1(10, 10, 9, 10, 10);
pazymiuVidurkis1(7, 7, 9, 7, 7);
pazymiuVidurkis1(8, 8, 9, 10, 8);
pazymiuVidurkis1(3, 10, 9, 10, 4);
pazymiuVidurkis1(5, 5, 9, 10, 6);

//=====================RETURN==================

//PAVYZDYS klaseje, kaip naudot return:
let kiekis = 14;
let kaina = 1.99;
let pav = "Paprika";

// 1variantas paprastas: console.log( pav, kaina); // atsirado paprikos ir 1.99

// 2 variantas su return:
function getPav() {
  return pav;
}
let x = getPav();
console.log(x); // gausime paprika



// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja

let vardas = "Tomas";
function getVardas() {
  return vardas;
}
console.log(getVardas());


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
  let vardas = "Antanas";
  let pavarde = "Tomauskas";

  return vardas + " " + pavarde; //Javascripte tekstus galima sudeti. pridedam tarpa, kad isvedime rodytu nesuklijuotus varda ir pavarde.
}
console.log(getVardasPavarde());


// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas() {
  let pajamos = 12500;
  let islaidos = 7500;
  let pelnas = pajamos - islaidos; //ilgesnis budas, nes sukuriame dar pelno kintamaji; bet galima iskart prie returno rasyt "pajamos - islaidos" veiksma.
  return pelnas;
}
console.log("pelnas yra:", getPelnas());


// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas1( pajamos1, nuostoliai1 ) {
  return pajamos1 - nuostoliai1;
}
console.log( getPelnas1( 2000, 500));
console.log( getPelnas1( 3000, 500));
console.log( getPelnas1( 4000, 500));

//pabandysiu parasyti zodi "menesio pavadinima" isvedime.
function getPelnas2( menuo, pajamos2, nuostoliai2 ) {
  let pelnas = pajamos2 - nuostoliai2;
  return menuo + " " + pelnas; //tarpukas yra tarp kabuciu, kad isvedime rodytu su tarpeliu;
}
console.log( getPelnas2( "sausis", 10000, 5248));


// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis3( x1, x2, x3, x4, x5) {
  let atsakymas = (x1 + x2 + x3 + x4 + x5) / 5;
  return atsakymas;
}
console.log(getPazymiuVidurkis3( 10, 3, 10, 9, 9));

//cia destytojas rase ant lentos varianta, kai vidurki isveda i narsykles langa. Man nepavyko:
//document.querySelector('h1').innerHTML += pazymiuVidurkis4(1, 1, 1, 4, 5);
//let JonoVidurkis = pazymiuVidurkis4 (1, 1, 1, 4, 5);
//console.log( pazymiuVidurkis4(1, 1, 1, 4, 5)  );



// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// IDEA: ieskos html'e h1 ir parodys jo auksti (su paddingu kartu).

function getH1ElementoAukstis() {
  return document.querySelector('h1').offsetHeight;
}
console.log( 'h1 aukstis:', getH1ElementoAukstis());

//UZDAVINYS. Liepsime surasti elementa xxxx.Ir f-ja turi ieskoti to elemento ir apskaiciuoti to elemento auksti.

function getElementoAukstis( elementoPavadinimas ) {
  // surandam h1 ir paima jo auksti su padding
  return document.querySelector( elementoPavadinimas ).offsetHeight;
}

console.log( 'body aukstis:', getElementoAukstis ( "body" ));
console.log( 'h1 aukstis:', getElementoAukstis ( "h1" ));
console.log( 'h2 aukstis:', getElementoAukstis ( "h2" ));
