console.log("labas");

// =================taisyklingas Array copy kaip nukopijuoti masyva =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy. Slice f-jai butinai reikia naujo var kintamojo, kad nauja kopija issaugoti.
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti visus; sunkes- surasti pirma riko)

let ieskomasis = "Rico"; //naudoti kuo universalesni koda, todel susikuriam kintamaji

// for (var i = 0; i < names.length; i++) {  //butina nurodyti masyvo pavadinima
//   if ( names[i] === ieskomasis) {  // ieskome i ir kai sutapss ieskomas zodis ir stalciaus informacija ir iskart atspausdiname.
//     console.log("Radom visus Rico. Jis yra stalciuje nr:", i);
//   }
// }

//reikia patikrinti visus stalcius su if, ar tu esi rico? If'a ideti i for cikla. Kiekvieno stalciaus klausime. Galima naudoti === lygybe.

for (var i = 0; i < names.length; i++) {
  if ( names[i] === ieskomasis) {
    console.log("Radom pirma Rico. Jis yra stalciuje nr:", i); //
    break;
  }
} // komanda break yra nutraukti cikla, kai rado pirma rico === ieskomasis is true. Kai tik kompiuteris perskaitys sia eilute, nutrauks VIENA cikla. Taip pat galima naudoti vietoj break "return" ir jis irgi nutraukia vieno ciklo darba. Break dazniausiai dedami i if.


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

// mano sprendimas (ne visai teisingas):
// let ieskomasis1 = "Piper"; //tokio masyve nera visai
//
// for (var i = 0; i < names.length; i++) {
//   if (names[i] === ieskomasis1) {
//     console.log("Jis yra stalciuje nr:", i)
//   } else {
//   }
// }
// console.log("Nepavyko rasti...Bandykite kita zodi"); // isspausdint reik tik 1 karta, todel console ne cikle. Cia klaida, nes visada sita eilute ismes, kad ir koks bus vardas ivestas.


// ieskomasTekstas = "Ricosssss";
// let arRadau = false; // NERADAU
// for (var i = 0; i < names.length; i++) {
//   if( names[i] === ieskomasTekstas) {
//     arRadau = true; //RADAU
//     console.log("Radom, jis yra stalciuje ", i);
//     break;  // visas FOR ciklas nutraukiamas (taip pat veikia return);
//   }
// }
// if (arRadau == false) {  // sita IF isimam is ciklo, kad jis nesikartotu
//   console.log("Nepavyko rasti:", ieskomasTekstas);
// }

//arba

ieskomasTekstas = "Ricosss";
let arRadau = false; // NERADAU
for (var i = 0; i < names.length; i++) {
  if( names[i] === ieskomasTekstas) {
    arRadau = true; //RADAU
    break;  // visas FOR ciklas nutraukiamas (taip pat veikia return);
  }
}
if (arRadau == false) {  // sita IF isimam is ciklo, kad jis nesikartotu
  console.log("Nepavyko rasti:", ieskomasTekstas);
} else {
  console.log("Radom, jis yra stalciuje ", i);
}


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)


function getStalciausNumeris(ieskomasTekstas) {
  for (var i = 0; i < names.length; i++) {
    if ( names[i] === ieskomasTekstas) {
      console.log("Ieskomas vardas yra stalciuje nr:", i);
      return i;
    }
  }
  return -999; //si eilute suveiks tik jeigu FOR cikle nei karto nesuveiks return.
}
//1 variantas atspausdinti:
console.log( "Rico numeris:", getStalciausNumeris("Rico")); //return reiksme grizta i ta vieta, kur yra iskviesta funkcija;
//2 variantas isiminti reiksme, kad ji nedingtu:
let nr = getStalciausNumeris("Rico");



// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

// mano sprendimas ilgas:
// let ieskomasVardas = "Freida";
//
// for (var i = 0; i < names.length; i++) {
//   if ( names[i] === ieskomasVardas) {
//     console.log("Freina vardas yra stalciuje:", i);
//     console.log("Freida pavarde:", lastNames[i]);
//     break;
//   }
// }

//geras trumpas sprendimas:
let FreidosNR = getStalciausNumeris("Freida"); //f-ja yra parasyta auksciau. Is pavadinimo turi suprasti, ar tau ji tinkama ir tiesiog ja panaudoti.
let FreidosPavarde = lastNames [FreidosNR];
console.log("Freidos pavarde:", FreidosPavarde);


// 4) rasti visu zmoniu vardu "Rico" pavardes

//mano variantas:

// let visiIeskomieji = "Rico";
//
// for (var i = 0; i < names.length; i++) {  //butina nurodyti masyvo pavadinima
//   if ( names[i] === visiIeskomieji) {  // ieskome i ir kai sutapss ieskomas zodis ir stalciaus informacija ir iskart atspausdiname.
//
//     console.log("Radom visus Rico. Ju pavardes:", lastNames [i]); // surandi names masyve Rico i, ir tada spausdini consoleje tuos surastus i is lastNames masyvo
//   }
// }

// kitas variantas destytojo trumpas:

ieskomasTekstas = "Rico";
for (var i = 0; i < names.length; i++) {
  if (names[i] === ieskomasTekstas) {
    let numeris = i;
    let pavarde = lastNames[numeris];
    console.log(ieskomasTekstas, "pavarde yra:", pavarde);
  }
}



// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];

// A) atspausdinti visus numerius

ieskomiZmones = [2, 16, 17, 18, 19, 25];


// destytojo variantas:
for (var i = 0; i < ieskomiZmones.length; i++) {
  console.log(ieskomiZmones[i]);
}



// for (var i = 0; i < names.length; i++) {
//   if (names[i] === ieskomiZmones[i]) {
// console.log ("vardas:", i );
//   }
// }





// B) isvesti ju pavardes ir vardus
let no = -999;

for (var i = 0; i < ieskomiZmones.length; i++) {
//  console.log(ieskomiZmones [i]); cia tik pasitikrinimui
  no = ieskomiZmones[i]; // nr = 2, => 16 => 17 ir t.t.
  console.log( names[no] + " " + lastNames[no] );
}

//ARBA:

// no = -999;
// for (var i = 0; i < names.length; i++) {
//   for (var j = 0; j < ieskomiZmones.length; j++) {
//     no = ieskomiZmones[j];
//     if (i == no) {
//       console.log( names[no] + " " + lastNames[no] );
//     }
//   }
// }

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
