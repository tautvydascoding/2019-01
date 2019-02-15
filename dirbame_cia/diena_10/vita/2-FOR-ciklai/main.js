console.log(   " mano js failas "  );
console.log("labas");

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

let ieskomasTekstas = 'Rico';
for (var i = 0; i < names.length; i++) {
  if( names[i] === ieskomasTekstas) {
  console.log("Radom Rico, Jis yra stalciuje:", i);
  break; // visas for ciklas nutraukiamas . Taip pat veikia zodelis return
  }
}
//  if (names[i] === ieskomasTekstas) { break; } {
  //console.log("Radom Rico, Jis yra stalciuje:", i);
  //}
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
let arRadau = false;
let ieskomasTekstas1 = 'Ricoss';
for (var i = 0; i < names.length; i++) {
if( names[i] === ieskomasTekstas1) {
  arRadau = true;
break;
}
}
if( arRadau === false ) {
console.log("tokio teksto nera, bandykite kita zodi");
} else {
  console.log("radau, jis yra stalciuje", i);
}


//if(arRadau == false){
  //console.log("nepavyko rasti",ieskomasTekstas1);
//}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris(ieskomasTekstas2){
  for (var i = 0; i < names.length; i++) {
    if( names[i] === ieskomasTekstas2) {
      console.log("ieskomas tekstas yra stalciuje", i);
    return i;
    }
  }
  return -999; // si eilute suveiks, tik jei for cikle nesuveiks return
}
console.log( getStalciausNumeris("Enriqueta"));


// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

let FreidosNR = getStalciausNumeris("Freida");
let FreidosPavarde = lastNames[FreidosNR];
console.log("Freidos pavarde yra", FreidosPavarde);

// 4) rasti visu zmoniu vardu "Rico" pavardes


for (var i = 0; i < names.length; i++) {
  if( names[i] === ieskomasTekstas) {
    let numeris = i;
    let pavarde = lastNames[numeris];
console.log(ieskomasTekstas, "pavarde yra:", pavarde);
}
}

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius

for (var i = 0; i < ieskomiZmones.length; i++) {
  console.log(ieskomiZmones[i]);
}

// B) isvesti ju pavardes ir vardus
let no = -999;
for (var i = 0; i < ieskomiZmones.length; i++) {
  //console.log(ieskomiZmones[i]);
  no = ieskomiZmones[i]; // nr 2, 16, 17, 18, 19, 25
  console.log( names[no] + " " + lastNames[no] );
}

//kitas budas

no = -999;
for (var i = 0; i < names.length; i++) {
  for (var j = 0; j < ieskomiZmones.length; j++) {
    no = ieskomiZmones[j];
      if (i == no) {
        console.log( names[no] + " " + lastNames[no] );
      }
  }
}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
