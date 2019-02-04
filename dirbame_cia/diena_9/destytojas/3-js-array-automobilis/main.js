console.log(   " mano js failas "  );


// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
let auto = ["Audi A6", 180000, 4500];
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
console.log(auto);
// 2. padidinti kaina: 100
auto[2] += 100;
console.log(auto);
// 3. padidinti rida: -50000
auto[1] += -50000;
console.log(auto);
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
auto[4] = "Tomas";
// arba
auto[   auto.length  ] = "Tomas";

// 4.1 atspausdinti visus pakeistus masyvo duomenis
console.log(auto);

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
auto[   auto.length  ] = "2008";

// sunkesne:
// 6. html elementus: article, h2, ... susikurti su javascript/ innerHTML ir
//  atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========
