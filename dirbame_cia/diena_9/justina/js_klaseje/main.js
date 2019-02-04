console.log(   " mano js failas "  );
// =================ARRAY masyvai  ======================

let name = "Tomas",
    lastname = "Tomauskis",
    age = 21;

let tekstas = "ilgas ilgas ilgas tekstas \
              kuris keliasi per kelias eilutes";
              // ilga teksta galima nukelti, kad tik kode matytum kelias eilutes ir kodas atrodytu aiskesnis. Vartotojas to nematys.


// x = name * lastname; // cia nesamoningas veiksmas, tai x consoleje isveda "pabaiga NaN (not a number)"
// console.log("pabaiga", x);


// for (var i = 0; i < 5; i++) {
//   console.log(i);
// }

function printSuma(x = -99, z = -99) {
  let suma = x + z;  //nuo cia apsauga, kad su minusu nerodytu;
  if (suma > 0) {
    console.log(suma);
  } else {
    console.log("Ivyko klaida, bandykite vel. (NR: PS111)");
  }
  console.log( x + z);
}
printSuma();
