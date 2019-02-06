console.log(   " mano js failas "  );

// $("h1").hide(5000); // 1sec = 1000
// $("h1").show(2000);

// $("button").click(function(){
//   $("p").toggle(2000);
// });
// //
// $("h1").mouseenter(function(event){
//   $("p").css("coursor", "pointer");
//   $("p").css("color", "blue");
//   $("p").css("background-color", "pink");
//   $("p").css("font-size", "10px");
// })
//
//
// let manoH1 = $("h1")
// manoH1.mouseenter(function(event){
//   manoH1.scc("coursor", "pointer");
//   manoH1.css("color", "blue");
//   manoH1.css("background-color", "pink");
//   manoH1.css("font-size", "10px");
// });


// let manoCSS = {
//   "coursor": "pointer",
//   "color": "blue",
//   "background-color":"#64afe0",
//   "font-size": "25px",
// };



//
// $("p").click(function functionName() {
//   $(this).css(manoCSS);     // 'this' veikia tik ant elemento ant kurio paspaudziama
// });

//---------------------------------------------------------------------------
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
//        <input type="text" name="vardas" value="">
//        <input type="email" name="pastas" value="">


// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)

$("h1, h2").css("color", "blue");



// A2) kas antra h2 pakeisti i raudona

// $("h2:even").class("color", "red");

// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
