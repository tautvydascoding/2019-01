/*jshint esversion: 6 */
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
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
let ieskomasis = "Rico";
let surasta = false;
for (var i = 0; i < names.length; i++) {
  if (names[i] == ieskomasis) {
    document.querySelector("h1").innerHTML += ieskomasis + " sarase yra " + i + " vietoje <br>";
    surasta = true;
    break;
  }
}
if (surasta == false) {
  document.querySelector("h1").innerHTML += "Nepavyko rasti...Bandykite kita zodi <br>";
}
// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
function getStalciausNumeris(ieskomasTekstas) {
  for (var i = 0; i < names.length; i++) {
    if (names[i] == ieskomasTekstas) {
      return i;
    }
  }
}
// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
function getLastName(vardas) {
  let lastName;
  lastName = lastNames[getStalciausNumeris(vardas)];
  document.querySelector("h1").innerHTML += "Vardo " + vardas + " pavarde yra " + lastName + " <br>";
}
getLastName("Freida");
// 4) rasti visu zmoniu vardu "Rico" pavardes
function getMultipleLastNames(vardas) {
  nameIndex = [];
  document.querySelector("h1").innerHTML += "Vardo " + vardas + " pavardes yra:  <br>";
  for (var i = 0; i < names.length; i++) {
    if (names[i] == vardas) {
      nameIndex.push(i);
    }
  }
  let lastName;
  for (var j = 0; j < nameIndex.length; j++) {
    lastName = lastNames[nameIndex[j]];
    document.querySelector("h1").innerHTML += lastName + " <br>";
  }
}
getMultipleLastNames("Rico");
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
document.querySelector("h1").innerHTML += ieskomiZmones.join(" ") + "<br>";
// B) isvesti ju pavardes ir vardus
for (var i = 0; i < ieskomiZmones.length; i++) {
  document.querySelector("h1").innerHTML += names[ieskomiZmones[i]] + " " + lastNames[ieskomiZmones[i]] +  "<br>";
}
// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
