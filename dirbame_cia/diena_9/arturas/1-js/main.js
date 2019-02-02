/*jshint esversion: 6 */
console.log(   " mano js failas "  );

let name = "Tomas",
    lastname = "TOmausk",
    age = 21;
let tekstas = "ilgas ilgas tekstas               kuris tesias per kelias eilutes";
x = name * age;

console.log(x);
for (var i = 0; i < 5; i++) {
  console.log(i);
}

function printSuma(x=-99, z=-99) {
  let suma = x + z;
  if (suma > 0) {
    console.log(suma);
  }
  else {
    console.log("ivyko klaida, bandyk vel(NR: PS111)")
  }

}
printSuma();
