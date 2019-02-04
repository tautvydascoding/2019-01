/*jshint esversion: 6 */
console.log(   " mano js failas "  );
// =====sukurti masyva 100 elementu ilgio naudojant FOR
let masyvas1 = [];
for (var i = 0; i < 100; i++) {
  masyvas1.push("el");
}
document.querySelector("h1").innerHTML += masyvas1.join("/") + "<br>";
//===== sukurti masyva 100 elementu ilgio naudojant WHILE
let masyvas2 = [];
while (masyvas2.length<100) {
  masyvas2.push("em");
}
document.querySelector("h1").innerHTML += masyvas2.join("|") + "<br>";
// 1A) susikurti funkcija, kuri atspasudina i konsole skaiciu kuri paduodate

function printSkaicius(x) {
  console.log(x);
}
printSkaicius(12);
// 1B) Paleisti funkcija 20 kartu
// for (var i = 0; i < 20; i++) {
//   printSkaicius(12 + i);
// }

// var i = 0;
// while (i<20) {
//   printSkaicius(12 + i);
//   i++;
// }
// 2) susikurti funkcija, kuri spausdina paduota skaiciu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")
function printSkaicius2(x) {
  let y;
  if (x == undefined) {
    y = -1;
  } else {
    y = x;
  }
  console.log(y);
}
printSkaicius2(2);
//  sukurti nauja masyva uzpildyta, atsitiktiniais skaiciais
let skaiciai = [];
for (var i = 0; i < 20; i++) {
  let nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;
  skaiciai.push(nuoVienoIkiSimto);
}
document.querySelector("h1").innerHTML += skaiciai.join(" ") + "<br>";
// sukurti f-ja getData(masyvas, x), kuri grazina is masyvo "masyvas" "x" stalciaus duomenis
function getData(masyvas, x) {
  document.querySelector("h1").innerHTML += masyvas[x - 1] + "<br>";
}
getData(skaiciai, 2);
//  sukurti f-ja rikiuojaDidejanciai(masyvas), kuri grazina surikiuota masyva dedejimo tvarka
function rikiuojaDidejanciai(masyvas) {
  masyvas.sort(function(a, b) {return a - b;});
  document.querySelector("h1").innerHTML += masyvas.join(" ") + "<br>";
}
rikiuojaDidejanciai(skaiciai);
//  sukurti f-ja rikiuojaMazejanciai(masyvas), kuri grazina surikiuota masyva mazejimo tvarka
function rikiuojaMazejanciai(masyvas) {
  masyvas.sort(function(a, b) {return b - a;});
    document.querySelector("h1").innerHTML += masyvas.join(" ") + "<br>";
}
rikiuojaMazejanciai(skaiciai);
// sukurti f-ja daznaiusiasElementasMasyve(masyvas) - rastiKurisElementasPasikartojaDazniausiai masyve, to find the most frequent item of an array
// function dazniausiasElementasMasyve(masyvas) {
  // let elementoPasikartojimas = 1;
  // let count = 0;
  // let dazniausiasElementas;
  // let resultatuMasyvas = [];
  // for (var i = 0; i < masyvas.length; i++) {
  //   for (var j = i; j < masyvas.length; j++) {
  //     if (masyvas[i] === masyvas[j]) {
  //       count++;
  //     }
  //     if (elementoPasikartojimas < count) {
  //         elementoPasikartojimas = count;
  //         dazniausiasElementas = masyvas[i];
  //     }
  //   }
  //   count = 0;
//   }
//   maxCount = dazniausiasElementas;
//   elementoPasikartojimas = 1;
//   for (var k = 0; k < masyvas.length; k++) {
//     for (var l = 0; l < masyvas.length; l++) {
//       if (masyvas[k] === masyvas[l]) {
//         count++;
//       }
//       if (elementoPasikartojimas < count) {
//           elementoPasikartojimas = count;
//           if (count === maxCount) {
//             resultatuMasyvas.push(masyvas[l]);
//           }
//       }
//     }
//     count = 0;
//   }
//   if (resultatuMasyvas.length === 0) {
//     document.querySelector("h1").innerHTML += "Klaida <br>";
//   } else {
//     document.querySelector("h1").innerHTML += "Pasikartojantys elementai: " + resultatuMasyvas.join(" ") + "<br>";
//   }
// }
// dazniausiasElementasMasyve(skaiciai);
// ---------------------------------
// sukurti f-ja kuri pasalina besikartojancias reiksmes (remove duplicate items from an array )
function removeDuplicates(masyvas){
    let unique_array = [];
    for(let i = 0;i < masyvas.length; i++){
        if (unique_array.indexOf(masyvas[i]) == -1) {
            unique_array.push(masyvas[i]);
        }
    }
    document.querySelector("h1").innerHTML += unique_array.join(" ") + "<br>";
}
removeDuplicates(skaiciai);
