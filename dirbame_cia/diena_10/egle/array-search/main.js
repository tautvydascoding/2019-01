console.log(   " mano js failas "  );

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

let ieskomasis = "ricoss"

for (var i = 0; i < names.length; i++) {
  if (names [i] === ieskomasis){ // !!!!!!! masyvas niekada nebuna tuscias, visada reikia deti "[ ]"
    console.log("Radom Rico. Jis yra stalciuje:", i);
  }
}

for (var i = 0; i < names.length; i++) {
  if (names [i] === ieskomasis){
  break; // kai tik reikiama info randama, visas coklas nutrukiamas; Taip pat galima naudoti "return"
  }
}
console.log("Rico yra: ", i);

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

let arRadau = false; //false reiskia NERADAU;
ieskomasTekstas = "Rico";

for (var i = 0; i < names.length; i++) {
  if (names [i] === ieskomasTekstas) {
    arRadau = true;
  break;
}
}
if (arRadau == false){
  console.log("Nepavyko rasti...Bandykite kita zodi", ieskomasTekstas);
}
else{
console.log("Radau. jis yra stalciuje:", i);
}


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus ieskoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)


function getStalciausNumeris( ieskomasTekstas){
 for (var i = 0; i < names.length; i++){
   if (names [i] === ieskomasTekstas){
      return i;
    }
  }
}
getStalciausNumeris("Rico");
console.log("surastas tekstas: " + "\"" + ieskomasTekstas + "\"" + ". Jis yra stalciuje ", i);


// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

let freidosNr = getStalciausNumeris('Freida');
let freidosPavarde = lastNames [ freidosNr ];
console.log("Freidos pavarde", freidosPavarde);


// 4



//   let ieskomiRico = getStalciausNumeris ('Rico');
//   let ricoPavarde = lastNames [ieskomiRico];
// console.log("Rico pavarde " + ricoPavarde);


// ieskomasTeksas = "Rico"


for (var i = 0; i < names.length; i++) {
  if (names[i] === ieskomasTekstas) {
    console.log(ieskomasTekstas + " pavarde yra " + lastNames [i]);
  }
}

// ARBA

for (var i = 0; i < names.length; i++) {
  if (names [i] === ieskomasTekstas){
    let numeris = i;
    let pavarde =lastNames[numeris]
    console.log(ieskomasTekstas, " pavarde yra " + pavarde);
  }
}

// 5 uzdavinys

//A:

for (var i = 0; i < ieskomiZmones.length; i++) {
  console.log(ieskomiZmones [i]);
}

//B:

let nr = -999;

for (var i = 0; i < ieskomiZmones.length; i++) {
  console.log(ieskomiZmones [i]);
  nr = ieskomiZmones[i];
  console.log(names[nr] + " " + lastNames[nr]);
}

//ARBA
no = -999;

for (var i = 0; i < names.length; i++) {
  for (var j = 0; j < ieskomiZmones.length; j++) {
    no = ieskomiZmones[j];
  }
 if (i == no){
   console.log(names[no] + " " + lastNames[no]);
 }
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
