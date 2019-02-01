/*jshint esversion: 6 */
console.log(   " mano js failasas "  );
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
let masina = ["Nissan", 50000, 4000];
// 1. isvesti masyvo duomenis
document.querySelector("h1").innerHTML += masina + "<br>";
// 2. padidinti kaina: 100
masina[2] = masina[2] + 100;
// 3. padidinti rida: -50000
masina[1] = masina[1] + 50000;
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
masina[3] = "Tomas";
// 4.1 atspausdinti visus pakeistus masyvo duomenis
document.querySelector("h1").innerHTML += masina + "<br>";
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
masina[4] = 2004;
// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
document.querySelector("body").innerHTML += "<article></article>";
document.querySelector("article").innerHTML += "<h2></h2>";
document.querySelector("article").innerHTML += "<div></div>";
document.querySelector("article").innerHTML += "<span></span>";
document.querySelector("article").innerHTML += "<button></button>";
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>
document.querySelector("h2").innerHTML = masina[0];
document.querySelector("div").innerHTML = "Savininko vardas: " + masina[3];
document.querySelector("span").innerHTML = "Masinos metai: " + masina[4] + " Rida: " + masina[1];
document.querySelector("button").innerHTML = "Masinos kaina: " + masina[2];
