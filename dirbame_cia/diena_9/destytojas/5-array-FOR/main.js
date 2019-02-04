console.log(   " mano js failas "  );

// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
let masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;   // i -> 0, i -> 1;  i -> 2 ... i -> 50
}
console.log( masyvas );

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
let mas = [];    // tuscias masyvas/array
let j = 0;       // pradine reiksme
while (j < 50) { // salyga
    mas[j] = 1;  // idejimas i masyva
    j++;         // didinimas
}
console.log(mas);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

for (var i = 0; i < 50; i++) {
    i++;
    mas[i] = 3;
}
console.log(mas);
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

// for (var i = 0; i < 50; i++) {
//     i += 4;
//     mas[i] = 9;
// }
// console.log(mas);

// ARBA
for (var i = 0; i < 50; i++) {
      // % dalyba ir grazina tik LIEKANA pvz: 2/2=0; 3/2 = 1; 5/3 = 2;
    if ( (i+1) % 5  ==  0) {
        mas[i] = 9;
    }
}
console.log("su if:", mas);
//=============bootstrap---sm-md-lg-xl (30-60m)==========
