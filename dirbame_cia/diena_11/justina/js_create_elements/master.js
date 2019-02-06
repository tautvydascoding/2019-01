

// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa.
// HTML'e jau turi buti sukurtas h1 ir jame aside.
// TIKSLAS: naudojant TIK JavaScript, sukurti <header> elementa su viduje esanciu tekstu ir <header> ideti po h1 elementu.


// 1. naudojant tik javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

let elmHeader = document.createElement("header");

console.log(elmHeader);

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

var elmText = document.createTextNode("Antraste");
console.log(elmText);


// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// test
// console.log(  manoHeader );

elmHeader.appendChild(elmText);
console.log(elmHeader);



// 3.1. headerio elementa ideti i <body> elementa

document.querySelector("body").appendChild(elmHeader); // kai susikuri teksta naudojant textNode, tai idesi tik su appendChild. Jei nenaudoji, tada dedi su innerHTML.

let elmAside = document.querySelector("aside");
console.log(elmAside);

let elmBody = document.querySelector("body");
console.log(elmBody);

elmBody.appendChild(elmHeader); // idejau headeri i body, headeris atsirado apacioje


// document.body yra sutrumpinimas document.querySelector("body"), bet trumpinimas veikia tik su body, su kitais elementais nesigaus.

// 3.2 html
        // body
        // header       insertBefore
        // aside
//      headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
//      document.body.insertBefore(  manoAside, manoH1 );

document.body.insertBefore(elmHeader, elmAside); // idejau header tarp h1 ir aside elementu.



































//
