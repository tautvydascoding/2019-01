console.log(   " mano js failas "  );



// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa
//isitikinti ar H1 ir aside elementai jau yra HTML.
// TIKSLAS: naudojant TIK JavaScript, sukurti <header> elementa su tekstu jo viduje
//ir <header> elementa ideti tarp H1 ir article elementu.

let elmHeader = document.createElement('header');

let elmText = document.createTextNode("lorem lorem lorem");

console.log(elmText);

elmHeader.appendChild(elmText);

var elmH1 =  document.querySelector("h1");
var elmAside = document.querySelector("aside");

document.body.insertBefore(elmText, elmAside);





// 1. naudojant TIK javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test




// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji
//ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

let manoTekstas = "Antraste"

let elmTekstas = document.createTextNode(manoTekstas);
console.log(elmTekstas);

elmAside.appendChild(elmTekstas);

document.body.insertBefore(elmText, elmAside);



// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// test
// console.log(  manoHeader );

let elmManoHeader = document.createElement('header');

let elmKitasTekstas = document.createTextNode('kitas tekstas');






// 3.1. headerio elementa ideti i <body> elementa

// 3.2 html
        // body
        // header       insertBefore
        // aside
//      headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
//      document.body.insertBefore(  manoAside, manoH1 );
