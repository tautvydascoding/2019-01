console.log ( "mano javascript failas" );

let sk = 2019;  // IDEA: vietoj var sk dabar naudojame let sk, nes let turi apsauga, kad nesukurti tokio paties pavadinimo kintamojo.
console.log("skaicius yra", sk);
sk = 2020; // IDEA: jau nenaudoju var, tik reiksme pakeiciu, naujo kintamojo nekuriu.
console.log("skaicius po pakeitimo", sk);

sk = sk + 1; // sk = 2020 + 1;
console.log("skaicius po pakeitimo naujas", sk);

// sukurti 3 kintamuosius x, y, z;
// x ir y priskirti reiksmes (inicializuoti);
// uzduotis - apskaiciuoti suma;

let x = 10; // IDEA: jei buciau rasiusi let x;, tai kintamojo tipas undefined (nezinomas tipas). Dabar pas mane jau inicializuota reiksme.

let y = 12;

let z;

z = x + y;
console.log ( "suma", z );
// IDEA: kitas budas:
let a;
let b;
let c;
a = 10;
b = 12;
c = a + b;
console.log ( "a + b =", c);

// IDEA: tobulesnis budas, kur matosi ir reiksmes, ir rezultatas:
console.log ( "a:", a , "b:", b , " a + b =", c);

//matematika:
c = a * b;
console.log ("daugyba", c);

c = ((2 + 4) / (a * 3)) - 1;
console.log ("matematiniai veiksmai", c);

// Math - javascript matematikos biblioteka, kur jau suprogramuotos tam tikros komandos. Biblioteka yra jau narsykleje idiegta, todel veikia.
c = Math.sqrt(16);
console.log("16 saknis", c);
