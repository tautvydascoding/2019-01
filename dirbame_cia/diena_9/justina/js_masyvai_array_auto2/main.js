console.log(   " mano js failas "  );


// -------- --Array / Masyvai  TEORIJA (~2h)--------------------

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina



masinos = ["Volvo", 100000, 15000];

// 1. isvesti masyvo duomenis
console.log(masinos);

// 2. padidinti kaina: 100

masinos[2] = masinos[2] + 100;
console.log(masinos);

// 3. padidinti rida: -50000

masinos[1] = masinos[1] - 50000;
console.log(masinos);

// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis

// masinos[3] = "Tomas"; paprastas budas
masinos [ masinos.length ] = "Tomas"; //profesionalus budas,kad idetu i paskutine vieta
console.log(masinos);

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

let masyvoIlgis = masinos.length; // parodo, kiek realiu yra stalciu, kai nezinai, kuris paskutinis uzimtas elementas, bet nepamirst, kas skaiciuojama tai nuo 0. jei man rodo length 4, tai sekantis laisvas indexas yra index4.
console.log(masyvoIlgis);

masinos[4] = "masinos metai \"2004\"";
console.log(masinos);


// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML


// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

document.querySelector("body").innerHTML += ("<article>" + "article" + "</article>");

document.querySelector("article").innerHTML += ("<h2>" + "pavadinimas:" + " " + masinos[0] + "</h2>");

document.querySelector("article").innerHTML += ("<div>" + "savininko vardas:" + " " + masinos[3] + "</div>");

document.querySelector("article").innerHTML += ("<span>" + masinos[4] + "; " + "Rida" + masinos[1] + "</span>");

document.querySelector("article").innerHTML += ("<br>" + "<button>" + masinos[2] + "</button>");



//=============bootstrap---sm-md-lg-xl (30-60m)==========
