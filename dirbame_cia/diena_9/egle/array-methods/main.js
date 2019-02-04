console.log(   " mano js failas "  );
// =========================================================

let miestai = [-999, 132, 13,"Vilnius", "Kaunas", 7,  "Klaipeda", "Marijampole", "Utena"];
console.log(miestai);

console.log( miestai.toString() ); // <---- iskelti


console.log( miestai.join(" ") );   // <---- viduje Join galima nurodyti kokiu tipo atskirti indeksus
miestai.push("Alytus"); // <----ideda nauja index
miestai.push("Siauliai");
console.log("Po idejimo: ", miestai);

miestai.pop(); //<--- istrina paskutini index
console.log("Po isemimo: ", miestai);

miestai.unshift("Vilkaviskis") //<--- ideda nauja index i 0 indexa ir perstumia kitus
console.log("Po naujo 0 index idejimo", miestai);

miestai.shift(); // <----istrina index i 0 indexa ir perstumia kitus
console.log("Po 0 index istrynimo:", miestai);


miestai.sort() //<------- isrikiuoja pagal abecele. Skaicu rikiuoti normaliai neina. reikia papildomu f-ju. numerius rikiuoja pagal pirma simboli.
  console.log("po isrikiavimo", miestai);


miestai.sort(function(a,b){return a-b})  //<----- papildoma f-ja, kad skaicius rikiuotu paeiliui
console.log("po isrikiavimo", miestai);


delete miestai[7]; //<------ istrina index is stalciaus
console.log("po istrynimo:", miestai);


miestai.splice(6,2,"Naujoji Akmene", "Silute");
console.log("Po splice keitimo:", miestai);

miestai.splice(2,0,"Kybartai");
console.log("Po ikelimo:", miestai);


let x = miestai;
console.log("kopija:", x);
console.log("originalas:", miestai);

x.unshift(0);
console.log("Po istrynimo:", x);
console.log("originalas:", miestai);


let y = miestai.slice(5,8);
let visaKopija = miestai.slice(0., miestai.length);

console.log("Slice kopijos:", " ", miestai, " ", y, " ", visaKopija);



// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
console.log(keliautojas);
// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta


// keliautojas.push("butelis vandens");
// console.log("Idejus vandeni:", keliautojas);
//
// keliautojas.unshift("ziebtuvelis");
// console.log("po ziebtuvelio idejimo:", keliautojas);
//
// keliautojas.splice(3,1);
// console.log("po istrynimo", keliautojas);

keliautojas.splice(4,0,"butelis vandens");
console.log("vanduo su splice:", keliautojas);

keliautojas.splice(0,0,"ziebtuvelis");
console.log("ziebtuvelis su splice:", keliautojas);


// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");


for (var i = 0; i < miestai.length; i++) {
  console.log(miestai[i]);
}


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
