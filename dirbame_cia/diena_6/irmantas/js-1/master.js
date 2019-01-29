
let antPopieriaus = 890;
let psd = antPopieriaus * 0.09;
let vsd = antPopieriaus / 2 * 0.24;
let iRankas = antPopieriaus - psd - vsd;

console.log("psd: " + psd + " vsd: " + vsd + " iRankas " + iRankas);

//2.1 UZDUOTIS

let vardas = "Irmantas";
let pavarde = "Jasevicius"
let amzius = 24;
let atlyginimas = 800;

console.log(vardas + " " + pavarde);
console.log("Vardo kintamojo tipas: " + typeof(vardas));
console.log("Amziaus kintamojo tipas: " + typeof(amzius));

//2.2 UZDUOTIS

function printVardasPavardeAmzius() {
  console.log(`Vardas: ${vardas} Pavarde: ${pavarde} Amzius: ${amzius}`);
};

printVardasPavardeAmzius();

//2.3 UZDUOTIS

function printMetinisPajamuDydis() {
  console.log("Metinis pajamu dydis: " + atlyginimas * 12)
};

printMetinisPajamuDydis();

// 2.4 UZDUOTIS
//A)

let salis = "Lietuva";
let miestas = "Alytus";
let adresas = "Panemuninkeliu g. 42";
let postoKodas = 62268;

//B)

const printAddressData = () => {
  console.log(`salis: ${salis}, miestas: ${miestas}, adresas: ${adresas}, postoKodas: ${postoKodas},`);
};

printAddressData();

//2.5 Uzduotys

function printTekstas(x="neivedus i funkcija teksto") {
  console.log(x);
};

printTekstas("printTekstas funkcija i kuria ivedus teksta bus isspausdinamas tekstas");
printTekstas();

//2.7 Uzduotys

const pitagoras = (a, b) => {
  let c = Math.sqrt(a*a + b*b);
  console.log(c);
};


pitagoras(3, 3);
