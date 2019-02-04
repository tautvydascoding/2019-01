console.log(   " mano js failas "  );
// ========js best practice & common mistakes (~2h)

// ===========ARRAY METODAI ================

let miestai = ["Vilnius",
              "Kaunas",
              10,
              -200,
              35715,
              "Klaipeda",
              "Palanga",
              75,
              "Marijampole"];
 //susikuriame masyva. Consoleje isskleidus _proto_ galima pamatyti, kokius metodus galima pritaikyti masyvui

console.log(miestai);

console.log( miestai.toString() ); //paleidziam string metoda. Eiluteje duomenys atskirti kableliu.

console.log( miestai.join(" skirtukas ") ); //paleidziam join metoda. Eiluteje duomenys pagal nutylejima atskirti kableliu. Bet galima nurodyt kitoki skirtuka.Tik tuo skiriasi nuo toString.

miestai.push ("Alytus");  //.push ideda i masyvo gala
miestai.push ("Telsiai");  //.push ideda i masyvo gala
console.log("po idejimo:", miestai);

miestai.pop ();  //.pop istrina paskutini is masyvo galo
console.log("po istrinimo:", miestai);

miestai.unshift("Vilkaviskis");
miestai.unshift("Taurage"); //unshift ideda i masyvo prieki elementa ir esamus pastumia. ideda ne vietoje 0, o pries 0 ir tada tas, kuris buvo 0, tampa 1.
console.log("po pridejimo:", miestai);

miestai.shift();// shift istrina is pradzios
console.log("po istrinimo:", miestai);

miestai.sort(); // sort surikiuoja
console.log("surikiuota pagal ABC:", miestai); // kai nera skaiciu, o tik stringai, surikiuoja normaliai. Arba tik skaicius. Bet jei yra sumaisyta, kai vieni stringai, kiti skaiciai, tai logikos nebelieka.
// let miestai = ["Vilnius",
//               "Kaunas",
//               10,
//               -200,
//               35715,
//               "Klaipeda",
//               "Palanga",
//               75,
//               "Marijampole"];

miestai.sort ( function (a, b) {return a-b} )
console.log("po surikiavimo su fja:", miestai.join()); // .sort tik su f-ja gerai surikiuoja tiek skaicius, tiek tekstus. arba tik skaicius.

delete miestai[7];  //istriname nuo priekio
console.log("po istrinimo 7 index:", miestai); //atsiranda consolej empty

miestai.splice(6, 2, "Naujoji akmene", "Silute");
console.log("po splice:", miestai); //istrina ir prideda. 6-nuo kelinto indexo istrinti; 2 - kiek istrinti; "Naujoji akmene" ir "Silute" prideti vietoj istrintu.
// su splice galima istrint ir iterpti, arba tik iterpti, arba tik istrinti.

//UZDUOTIS i index1 ideti "Naujasis Kaunas":

miestai.splice(1, 0, "naujasis Kaunas"); // iterpimo funkcija. nieko neistryne, bet idejo i reikiama vieta.
console.log("po splice ir idejimo:", miestai);


let x = miestai;  // cia miestu masyvo kopija
console.log("kopija:", x); // spausdinam originala ir kopija
console.log("originalas:", miestai);

miestai.shift();  // kopijoje istrinam pirma indexa.
console.log("kopija po istrynimo:", x);
console.log("originalas po istrynimo:", miestai); // pas abu dingo index1, nes masyvu kopijuoti NEGALIMA. Kopijuoti galima stalciukais.

let y = miestai.slice(5,8); //nukopijavo nuo 5 iki 8 indexo, bet 8 index neideda, tik iki jo kopina, tai nukopina 5,6 ir 7 indexus.
console.log("nukopino nuo 5 iki 8:", y);

let visaKopija = miestai.slice( 0 ); // tikro kopija nuo 0 iki galo
console.log("kopija visa:", visaKopija);



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

keliautojas.push("butelis vandens");
console.log(keliautojas);

keliautojas.splice(5,0, "paskutinis butelis"); // su splice ideti i gala
console.log("su splice:", keliautojas);

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"

keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);

keliautojas.splice(0, 0, "pirmas ziebtuvelis"); // su splice ideti i prieki
console.log("su splice:", keliautojas);

// 3. istrinti 3-cia elmenta

keliautojas.splice(2,1);
console.log("istrintas index2 su splice:", keliautojas); // visai istrintas index2 ir visi like elementai pasislenka, nelieka tuscio stalciuko.

delete keliautojas[2];
console.log("istrinta su delete index2:", keliautojas); //cia rodys consoleje empty teksta toje vietoje, kur istrinta, index2 lieka tiesiog tuscia vieta, kuria galima uzpildyti.


// ==================FOR ciklai ARRAY =============================

for (var i = 0; i < miestai.length; i++) { //miestai.length yra skaicius 11 (kai paziuri masyve, kiek yra nariu. Geriau ranka nerasyti, bet jei nori, gali irasyti skaiciu.)
  console.log( miestai[i] ); // beveik visada dirbant su for ciklu ir masyvu, cia bus [i] , t.y. "i" raide. Dabar atspausdini visus miestus consoleje.
}

// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

let masyvas = []; //susikuriame viena masyva, jo reikia tik vieno, todel ne for cikle kuriame;
for (var i = 0; i < 50; i++) { //kadangi masyvas tuscias, ranka irasome "50". Kitu atveju naudotume masyvo.lenght
  masyvas[i] = 0;  // i=0, tada i=1, i=2 ir t.t.
}
console.log(masyvas);


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

let masyvas1 = []; // tuscias masyvas
let j = 0;          // pradine reiksme
while (j < 50) {   //salyga
  masyvas1[j] = 1;  // idejimas i masyva. Jei nori uzpildyti "3", rasai vietoj "1"
  j++;              // didinimas
}
console.log("masyvas su while:", masyvas1);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

for (var i = 0; i < masyvas1.length; i++) {
  i = i + 1;
  masyvas1.splice(i, 1, 3);
}

console.log("masyvas su while ir kas antras 3:", masyvas1);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

// mano variantas:
// for (var i = 0; i < masyvas1.length; i++) {
//   i = i + 4;
//   masyvas1.splice(i, 1, 9);  //i- nuo kelinto indexo istrinti, 1-kiek istrinti, 9-kokia reiksme irasyti vietoje istrinto.
// }

// kitas variantas:
// for (var i = 0; i < masyvas1.length; i++) {
//   i += 4;
//   masyvas1[i] = 9;
// }

// dar kitas variantas:
for (var i = 0; i < masyvas1.length; i++) {
  if ((i+1) % 5 == 0) { // % dalyba ir grazina tik LIEKANA. pvz: 2 % 2 = 0; (t.y. sveikas skaicius be liekanos) 3 % 2 = 1 (t.y. nesveikas skaicius, su liekana); 5 % 2 = 1;
    masyvas1[i] = 9;
  }
}

console.log("masyvas su while ir kas penktas 9:", masyvas1);


//=============bootstrap---sm-md-lg-xl (30-60m)==========
