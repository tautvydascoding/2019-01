console.log(   " mano js failas "  );

let name = "Tomas";
  lastName = "Tomauskis";
  age = 21;

let tekstas = "ilgas ilgas kelias\
                kuris tesiasi per kelias eilutes"
x = name * lastName;

console.log("pabaiga", x);

for (var i = 0; i < 5; i++) {
  console.log(i);
}


function printSuma(x = -99, z = -99){   //<- ideti didele reiskme arba 0, kad butu aisku, kad issaukta f-ja neturi reiksmiu
  let suma = x + z;
  console.log();

}
printSuma();


function printSuma(x = -99, z = -99){   //<- ideti didele reiskme arba 0, kad butu aisku, kad issaukta f-ja neturi reiksmiu.
  let suma = x + z;
  if (suma >0){
  }else {
      console.log("ivyko klaida, bandykite vel (NR:11111)"); // <---- susikurti unicalu klaidos koda, kad esant reikalui butu lengviau surasti, kas neveikia
    }
  }
printSuma();
