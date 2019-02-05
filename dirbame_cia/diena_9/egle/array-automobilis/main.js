console.log(   " mano js failas "  );
// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========

let masinuDuomenys = ["Honda", 10000, 25000];
console.log(masinuDuomenys);

function kainaDideja(){
  masinuDuomenys [2] += 100;
}
kainaDideja();
console.log("po padidinimo:", masinuDuomenys);

masinuDuomenys[1] += -5000;
console.log("po padidinimo:", masinuDuomenys);

masinuDuomenys[3] = "Tomas"
console.log("po padidinimo:", masinuDuomenys);

masinuDuomenys[4] = "2004";
console.log("po pakeitimo:", masinuDuomenys);

// document.write("<article>" + masinuDuomenys + "</artivle>")

document.querySelector('article').innerHTML+= "<h2>" + masinuDuomenys[0] + "</h2>";
document.querySelector('article').innerHTML+= "<div>" + masinuDuomenys[3] + "</div>";
document.querySelector('article').innerHTML+=  "<span>" + masinuDuomenys[4] + "   " + masinuDuomenys[1] + "</span>" + "<br>";
document.querySelector('article').innerHTML+= "<button type = 'button'>" +  masinuDuomenys[2] + "</button>";



// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)----------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
// UZDUOTIS; panaudoti masyvu Methods:

// .length
// .join()
// .shift()
// .pop()
// ...
// pvz    names.shift();





// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
