/*jshint esversion: 6 */
console.log(   " mano js failas "  );
// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
$("h1, h2").css("color", "blue");
// A2) kas antra h2 pakeisti i raudona
$("h2:even").css("color", "red");
// A3) visiems h2, kurie yra <section> viduje - uzdeti pink fono spalva
$("section > h2").css("background-color", "pink");
// A4) sunkesnis: visiems h2 kurie nera <section> viduje -uzdeti geltona fono spalva
$("body > h2").css("background-color", "yellow");
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
$("li:last").css("color", "green");
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
$("li:not('.reklama')").css("background-color", "yellow");
// D) visus <input> kurie turi atributa: name="pastas"  -  uzdeti ruzava fono splava
$("input[name='pastas']").css("background-color", "pink");
