console.log(   " mano js failas "  );
// =================ARRAY masyvai  ======================

let pavardes = ["Tomauskis", "Paulaitis", "Okaite"];

console.log( "index 1:", pavardes[1]); //1, 0, 2 yra indexai, priskirti pavardems
console.log( "index 0:", pavardes [0]);
console.log( "index 2:", pavardes [2]);

// pridedam papildoma pavarde:

pavardes [3] = "Kalukaitis";
console.log( "pridedama pavarde i masyva:", pavardes [3]);

// pakeiciam pavarde index 0:

pavardes [0] = "Tomauskiene";
console.log( "pakeistas indexas 1 Tomauskis:", pavardes [0] );

//pasitikrinimui:

console.log(pavardes.length); // parodo tik kieki fizini, kiek yra elementu. pvz "4"

console.log(pavardes); // parodo visus masyve esamas pavardes

let vardai = [];
//pridedam vardus:
vardai [0] = "Aiste";
console.log( "index 1 vardas:", vardai[0] );
vardai [4] = "Mindaugas";
vardai [2] = "Saule";
vardai [1] = "Mantas";
vardai [3] = "Benas";
console.log( "prideti vardai:", vardai[1], vardai[2], vardai[3], vardai[4] );
