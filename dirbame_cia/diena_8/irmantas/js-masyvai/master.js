// let arVedesZmogus = arVedes(true);
//
// function arVedes(x) {
//   if (x) {
//     console.log("vedes");
//     return true
//   } else {
//     console.log("nevedes");
//     return false;
//   }
// };
//
//
//
// if (arVedesZmogus) {
//   console.log("duoti paskola");
// } else {
//   console.log("neduoti");
// };
//1.1 Uzduotis

let prekiautojai = ["Rimi", "Maxima", "Senukai", "Norfa"];
console.log(prekiautojai);


// 2.1 UZDUOTIS
prekiautojai[0] = "ir KO";
console.log(prekiautojai);
// 3 UZDUOTIS
function sumainytiDaiktus(x, y) {
  let item = prekiautojai[x];
  prekiautojai.splice(x,1);
  prekiautojai.splice(y,0,item)
  console.log(prekiautojai);
};

// let trecias = prekiautojai[2];
// prekiautojai.splice(2,1);
// console.log(trecias);
// prekiautojai.splice(1,0,trecias)
// console.log(prekiautojai);

//1) Uzduotis masyvai js-2
let manoAutomobilis = ["Opel Astra", 250000, 1200];
console.log(manoAutomobilis);
manoAutomobilis[1] += 50000;
manoAutomobilis[2] += 1200;
manoAutomobilis.push("Tomas");
console.log(manoAutomobilis);
manoAutomobilis.push("2004m.");
console.log(manoAutomobilis);

document.write("<h1>Automobilio pavadinimas: " + manoAutomobilis[0] + "<h1>");
document.write("<h2>Rida: " + manoAutomobilis[1] + "<h2>");
document.write("<h3>Kaina: " + manoAutomobilis[2] + "<h3>");
document.write("<h4>Savininkas: " + manoAutomobilis[3] + "<h4>");
document.write("<h5> Automobilio metai: " + manoAutomobilis[4] + "<h5>");

//
let keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

keliautojas.push("butelis vandens");
keliautojas.unshift("ziebtuvelis");
keliautojas.splice(2,1);

console.log(keliautojas.join(" "));

//Geresni UZDAVINIAI 4
let skaiciai = [];
for (var i = 0; i < 50; i++) {
  skaiciai.push(0);
}
console.log(skaiciai);

//Geresni UZDAVINIAI 5.1

let skaiciai2 = [];

while (skaiciai2.length < 50) {
  i++;
  if (Number.isInteger((i)/5)) {
skaiciai2.push(9);
} else if (Number.isInteger((i)/2)){
  skaiciai2.push(3);
} else {skaiciai2.push(1);
}
};

console.log(skaiciai2);





































//
