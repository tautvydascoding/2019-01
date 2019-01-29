// butinai isijungti console narsykleje, kai dirbi su javascript.
//tekstas pasitikrinimui:
console.log ( "mano javascript failas" );

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "Domas";
let pavarde = "Petraitis";
let amzius = 30; //skaicius rasyti ne kabutese, nes ateity noresit padidint, pakeisti, sumazint.
let atlyginimas = 900;
console.log ( vardas, pavarde );

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );

console.log ( typeof (vardas) );
console.log ( typeof (amzius) );


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

//cia teorija apie funkcijas:
function suma() {
  let x = 10;
  let y = 5;
  let suma = x + y;
  console.log("suma", suma);
  // arba
  // console.log("suma", x + y);
}
//veiks tik tada, kai iskviesime. Ir kiek kartu iskviesime, tiek kartu suveiks:
  suma ();
  suma ();

  //uzduoties sprendimas:

  function printVardasPavardeAmzius() {
    console.log( "printVardasPavardeAmzius", vardas, pavarde, amzius);
  }
  printVardasPavardeAmzius (); //paleidziam, kad veiktu funkcija;


//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")


function printMetinisPajamuDydis() {
  let atlyginimai12 = atlyginimas * 12;
  console.log("printMetinisPajamuDydis", atlyginimai12);
}
printMetinisPajamuDydis ();



//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "Savanoriu pr.20";
let pastoKodas = "45000";

function printAddressData() {
  console.log("printAddressData", salis, miestas, adresas, pastoKodas);
}
printAddressData ();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");


function printTekstas(x) { //x yra sukurtas kintamasis (atitikmuo let x), bet jis yra laikinas ir veikia tik sios f-jos viduje.
  console.log("printTekstas", x);
}
printTekstas("Jokubo istorijos");
//sios funkcijos yra daugkartinio naudojimo.

function Svidurkis( vardas, x1, x2, x3, x4) {
  console.log("vidurkis", vardas, (x1 + x2 + x3 + x4) / 4 );
}
Svidurkis("Tomas", 10, 10, 9, 8);
Svidurkis("Aiste", 4, 4, 9, 8);

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())


function pitagoroTeorema(x, y) {
  let z = x*x + y*y;
  w = Math.sqrt(z);
  console.log("Pitagoro apskaiciavimas", w);
}
pitagoroTeorema(2, 3); //cia mes rasome vis kitas reiksmes, kurios nuskrenda i funkcijos skliaustelius, ir tada yra apskaiciuojamos.


//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
