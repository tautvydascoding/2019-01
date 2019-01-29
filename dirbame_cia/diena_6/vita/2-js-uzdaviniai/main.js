console.log(  "mano js failas 2"  );

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas;
let pavarde;
let amzius;
let atlyginimas;

vardas = "Antanas";
pavarde = "Jonaitis";
amzius = 30;
atlyginimas = 1000;
console.log( vardas, pavarde );


// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

function suma() {
let x = 10;
let y = 5;
let suma = x + y;
console.log("suma", x + y);
}
suma()


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
console.log( vardas, pavarde, amzius );
}
printVardasPavardeAmzius()

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
let uzduotis1 = atlyginimas * 12;
console.log( uzduotis1 );
}
printMetinisPajamuDydis()

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "Lietuva";
let miestas = "Kaunas";
let adresas ="silainiai";
let pastokodas = 12345;

function printAddressData() {
console.log( salis, miestas, adresas, pastokodas );
}
printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {
console.log( x );
}
printTekstas("Jokubo istorijos");

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

function pitagoroTeorema(x, y ) {

let krastine =  Math.sqrt(x*x + y*y);
console.log( krastine );
}
pitagoroTeorema(3, 5);
pitagoroTeorema(4, 6);
pitagoroTeorema(6, 8);


function pazymiuvidurkis(vardas, x1, x2, x3, x4 ) {
let vidurkis = (x1 + x2 + x3 + x4)/4;
console.log( vardas, vidurkis);
}
pazymiuvidurkis("Tomas", 8, 7, 6, 9);
pazymiuvidurkis("Ieva", 8, 9, 7, 5);
pazymiuvidurkis("Laima", 9, 7, 6, 9);
