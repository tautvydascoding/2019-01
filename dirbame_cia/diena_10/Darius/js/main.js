// //1.susikurti elementa
// 2. ideti tekstas
// 3. ideti turini su .innerHTML arba kurti TextNode ir appendchild
// appendchild - elementa ikelia i kita elementa

// var elmH1 =  document.querySelector("h1");
// //       kur                kaIdeti  PriesKa
// document.body.insertBefore(elmAside, elmH1); // reikia nurodyti tevini elementa, nurodyti ka ideti, tai elmAside ir nurodyti pries ka ideti, pris elmH1


// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa

// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// test
// console.log(  manoHeader );

// 3.1. headerio elementa ideti i <body> elementa

// 3.2 html
        // body
        // header       insertBefore
        // aside
//      headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
//      document.body.insertBefore(  manoAside, manoH1 );
//1 uzduotis
let elHeader = document.createElement("header");
let elAside = document.querySelector("aside");
document.body.insertBefore(elHeader, elAside);
console.log(elHeader);

// 1.2 uzduotis
var manotekstas = "Antraste";
let text = document.createTextNode(manotekstas);
elHeader.appendChild(text);

//2 uzduotis

let text2 = document.createTextNode(" " + "tekstas");
elHeader.appendChild(text2);

// 3.1 uzduotis

let elbody = document.querySelector("body");
elbody.appendChild(text2);






