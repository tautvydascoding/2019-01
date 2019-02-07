/*jshint esversion: 6 */
console.log(   " mano js failas "  );
// A pasisiimti bootstrap suprogramuota 1-5 layouta

// naudojant jquery or js
// 1 pasalinti visas spalvu klases
document.querySelector("nav").classList.remove("bg-info");
$("header > div").removeClass("bg-success");
$("footer > div").removeClass("bg-success");
 // 2 uzdeti priesingas spalvu klases
 document.querySelector("header > div").classList.add("bg-info");
$("footer > div").addClass("bg-info");
$("nav").addClass("bg-success");
