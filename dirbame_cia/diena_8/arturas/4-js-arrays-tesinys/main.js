/*jshint esversion: 6 */
console.log(   " mano js failasas "  );
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.push("butelis vandens");
document.querySelector("h1").innerHTML += keliautojas.join("///") + "<br>";
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("ziebtuvelis");
document.querySelector("h1").innerHTML += keliautojas.join("///") + "<br>";
// 3. istrinti 3-cia elmenta
keliautojas.splice(2, 1);
document.querySelector("h1").innerHTML += keliautojas.join("///") + "<br>";
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
let masyvas1 = [];
for (var i = 0; i < 50; i++) {
  masyvas1.push(0);
}
document.querySelector("h1").innerHTML += masyvas1.join("/") + "<br>";
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
let masyvas2 = [];
while (masyvas2.length < 50) {
  masyvas2.push(1);
}
document.querySelector("h1").innerHTML += masyvas2.join("/") + "<br>";
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 0; i < masyvas2.length; i=i+2) {
  masyvas2.splice(i+1,1,3);
}
document.querySelector("h1").innerHTML += masyvas2.join("/") + "<br>";
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 0; i < (masyvas2.length - 1); i=i+5) {
  masyvas2.splice(i+5,1,9);
}
document.querySelector("h1").innerHTML += masyvas2.join("/") + "<br>";
