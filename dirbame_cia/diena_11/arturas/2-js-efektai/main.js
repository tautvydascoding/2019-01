/*jshint esversion: 6 */
console.log(   " mano js failas "  );
// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa
// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test
let elmHeader = document.createElement("header");
// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)
let manoTekstas = "Antraste";
// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// test
// console.log(  manoHeader );
// 3.1. headerio elementa ideti i <body> elementa
let elmAside = document.querySelector("aside");
document.body.insertBefore(elmHeader, elmAside);
let manoHeader = document.createTextNode(manoTekstas);
document.querySelector("header").appendChild(manoHeader);



// 3.2 html
        // body
        // header       insertBefore
        // aside
//      headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
//      document.body.insertBefore(  manoAside, manoH1 );
