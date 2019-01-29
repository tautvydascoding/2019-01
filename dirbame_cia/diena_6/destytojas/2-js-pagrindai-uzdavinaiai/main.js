console.log(   " mano js failas "  );


//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);
let vardas = "Tomas";
let pavarde = "Tomauskis";
let amzius = 20;
let atlyginimas = 890;

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );


function suma() {
    let x = 10;
    let y = 5;
    let suma = x + y;
    console.log( "suma", suma );
    // arba
    // console.log( "suma", x + y );
}
suma();
suma();
suma();


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log(  vardas, pavarde, amzius);
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printMetinisPajamuDydis() {
    let metinis = atlyginimas * 12;
    console.log( "metinis atl.:", metinis);
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
let salis = "Kinija";
let miestas = "Pekinas";
let adresas = "Rytu raj., Mao aps., Rouk 46-56";
let pastoKodas = "CN312654";


// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");



// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
