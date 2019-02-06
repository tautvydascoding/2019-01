/*jshint esversion: 6 */
console.log(   " mano js failas "  );

// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)
$("h1").eq(0).text("Antraste nr: 1");
$("h1").eq(1).text("Antraste nr: 2");
//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
$("section > h2").text("Pakeista antraste");
// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta
console.log($("li.reklama").text());
// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus
console.log($("li").text());
//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)
let apie = $("li").eq(1).text();
let galerija = $("li").eq(2).text();
$("li").eq(1).text(galerija);
$("li").eq(2).text(apie);

//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)
$("li.reklama").css("color", "red");
// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
$("li").addClass("nav-item");
// B. pirmam "li" elementui uzddeti dar viena klase: "active"
$("li").eq(0).addClass("active");
// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
$("input").attr("val", "xxx");
//  ivesti vardas: 'Tomas'
$("input:first").val("Tomas");
//  ivesti pastas: 'a@a.lt'
$("input").eq(1).val("a@a.lt");
