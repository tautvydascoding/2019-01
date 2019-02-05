console.log(   " mano js failas "  );

let name = "tomas"  ,
    lastname = "Tomauskis",
    age = 21;

let tekstas = "ilgas ilgas tekstas \
                kuris tesiasi per kelias eilutes";
//  "ilgas ilgas tekstas kuris tesiasi per kelias eilutes";
x = name * lastname;
console.log("pabaiga", x);

for (var i = 0; i < 5; i++) {
    console.log( i );
}
function printSuma(x = -99, z = -99) {
    let suma =  x + z;
    if (suma > 0) {
        console.log(suma);
    } else {
        console.log("Ivyko klaida, bandykite vel. (NR: PS111)");
    }
}
printSuma();
