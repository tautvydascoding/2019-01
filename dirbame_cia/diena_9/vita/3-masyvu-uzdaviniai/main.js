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

let masina = ["volvo", 120000, 3000];

masina[2] = masina[2] + 100;
masina[1] = masina[1] + -50000;
console.log(masina);

// sukuria automatiskai nauja masyvo elementa: auto[ auto.lenght ] = "Tomas";

masina[3] = "Tomas";
masina[4] = "2004";
console.log(masina);


// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML

document.querySelector("article").innerHTML +=  "<h2>" + masina[0] +"</h2>" ;
document.querySelector("article").innerHTML += "<div> " + masina[3] + "</div>";
document.querySelector("article").innerHTML += "<span> " + masina[4] + "  "+ masina[1] + "</span>" ;
document.querySelector("article").innerHTML += "<br>" + "<button type='button'>" +  masina[2] + "</button>";

// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>
//=============bootstrap---sm-md-lg-xl (30-60m)==========
// ========js best practice & common mistakes (~2h)



// -------- --Array / Masyvai  Methods (~2h)----------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
// UZDUOTIS; panaudoti masyvu Methods:

// .length kintamasis, nes nera skliausteliu
// .join() pagal nutylejima kableli, bet galima nurodyti kita skirtuka, pvz .join('  ')
// .shift() // ismeta elementa is masyvo priekio
// push() istumia i pati gala nauja elementa
// .pop()
// .unshift(); // ideda nauja elementa i masyvo prieki

// pvz    names.shift();

let miestai = ["Vilnius", "Kaunas", "Klaipeda", "Siauliai", "Panevezys", 3423, -999, 13, 7 ];
console.log(miestai);
console.log(miestai.toString());

console.log(miestai.join('  '));

miestai.push("Alytus"); //istumia i masyvo pati gala nauja elementa
miestai.push("Telsiai");
console.log(miestai);
miestai.pop("Telsiai");
console.log(miestai);
miestai.unshift("Vilkaviskis"); // ideda nauja elementa i masyvo prieki
console.log(miestai);
miestai.shift(); //istrina elementa is priekio ir visus atitinkamai perkelia
console.log(miestai);
miestai.sort(); //surikiuoja
console.log(miestai);

delete miestai[7]; // istrina
console.log("po istrynimo", miestai);

miestai.splice(6, 2, "NAkmene", "Silute"); //istrynimas ir nauju idejimas
console.log("po istrynimo 6 ir 7", miestai);


miestai.splice(1, 0,  "Zapyskis"); // iterpimas
console.log(miestai);

miestai.slice()

let x = miestai; // pasidarom kopija masyvo
console.log("kopija", x);

x.splice(0, 1);
console.log("kopija123",x);
console.log("originalas123", miestai);


let y = miestai.slice(5, 8); // geras/tikras elementu kopijavimas nuo 5 iki 7 elemento imtinai (8 nebeieina)
console.log(y);

let visaKopija = miestai.slice( miestai.lenght ); // viso masyvo kopija
console.log(visaKopija);


// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

keliautojas.push("butelis vandens");
console.log(keliautojas);

keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);

keliautojas.splice(2, 1);
console.log(keliautojas);

// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

for (var i = 0; i < 11; i++) {
console.log("miestai:", miestai[i]);
}


let masyvas = [];
for (var i = 0; i < 50; i++) {
  masyvas[i] = 0; // i-> 0, i-> 1, i-> 2, .... i-> 50
}
console.log(masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

let masyvas1 = [];    // tuscias masyvas
let j = 0;            // pradine reiksme
while(j < 50) {       // salyga
  masyvas1[j] = 1;    // idejimas i masyva
j++ ;                  // didinimas
}
console.log(masyvas1);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....


for (var i = 0; i < 50; i++ ) {
  masyvas1[i] = 3;
  i = i + 1;
}
console.log(masyvas1);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

for (var i = 0; i < 50; i++ ) {
  i+= 4;
  masyvas1[i] = 9;
}
console.log(masyvas1);


//kitas budas
for (var i = 1; i < 50; i++) {
  if ((i+1) % 5 == 0){ // dalyba ir grazina tik liekana pvz 2/2 = 0; 5/3 = 2;
    masyvas1[i] = 9;
  }
}
console.log("kitasbudas", masyvas1);

//arVedes = true;
//while() {
//arVedes;
// perkageles();
// if (....){
// tada issiskirsi}
//arVedes = false;
//}

//=============bootstrap---sm-md-lg-xl (30-60m)==========
