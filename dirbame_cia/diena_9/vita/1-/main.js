console.log(   " mano js failas "  );
let name = "tomas",
  lastname  = "tomauskis",
  age = 21;

let tekstas = "ilgas ilgas tekstas \
                kuris tesiasi per kelias eilutes slesho pagalba";

x = name * lastname;
console.log("pabaiga", x);

for ( var i = 0; i < 5; i++) {
  console.log(i);
}

function printsuma(x = -99, z = -99) { // isankstines reiksmes
  let suma = x + z;
  if (suma > 0) {
    console.log(suma);
  } else {
    console.log("ivyko klaida, bandykite vel, (klaidos Nr:PS111) ");
  }
}
console.log(x + z);
printsuma();
