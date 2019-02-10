console.log(   " mano js failas "  );



// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa
//sukurti <header> naudojant tik javascrpt jau turint h1 ir aside.

var elmText = document.createTextNode("manotekstas");
var elmHeader = document.createElement("header");
elmHeader.appendChild(elmText);
document.body.appendChild(elmHeader);

var elmAside =  document.querySelector("aside");
console.log(elmAside);
document.body.insertBefore(elmHeader, elmAside);


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

//  visur naudoti tik jQuery!!!!!!

// UZDUOTIS 1

// .html kodas:
// <h1>Isijunk konsole</h1>
// <h1>Isijunk konsole</h1>
//
// <h2> 1. h2 Isijunk konsole</h2>
// <h2> 2. h2 Isijunk konsole</h2>
// <h2> 3. h2 Isijunk konsole</h2>
//
//  <section>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//  </section>
//
// <ul>
//     <li>Home</li>
//     <li>About</li>
//     <li classs='reklama'>Gallery</li>
//     <li>Contact</li>
// </ul>
//       <input type="text" name="vardas" value="">
  //      <input type="email" name="pastas" value="">

// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// A2) kas antra h2 pakeisti i raudona
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
//var elmH1 = document.createElement("h1");
//var elmH21 = document.createElement("h2");


// var elmSection = document.createElement("section");
// var elmText1 = document.createTextNode("Isijunk konsole");
// elmH1.appendChild(elmText1);
// elmH21.appendChild(elmText2);
// document.body.appendChild(elmH1);
// elmSection.appendChild(elmH22);
// document.body.appendChild(elmH22);
// elmHLi.appendChild(elmText4);
// elmUl.appendChild(elmLi);

$( "h1" ).add( "h2" ).css( "color", "blue" );

$ ("h2:even").css("color", "red" );
$ ("li:last").css("color", "green" );
$( "li" ).add( "li.not" ).css( "color", "blue" );
